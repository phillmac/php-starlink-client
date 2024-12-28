<?php

/** @noinspection PhpComposerExtensionStubsInspection */

namespace SRWieZ\StarlinkClient;

use GdImage;
use InvalidArgumentException;

class ObstructionMapGenerator
{
    protected string $obstructedColor = 'FF0000'; // Red

    protected string $unobstructedColor = '0000FF'; // Blue

    protected string $noDataColor = '000000'; // Black

    protected bool $grayscale = false;

    protected bool $proportional = false;

    protected bool $transparent = true;

    protected float $opacity = 0.90;

    protected ?GdImage $image = null;

    /**
     * @var array{snr: float[], numCols: int, numRows: int}
     */
    protected array $mapData;

    public function __construct(array $mapData)
    {
        $this->validateMapData($mapData);

        $this->mapData = $mapData;
    }

    public function __destruct()
    {
        if ($this->image !== null) {
            imagedestroy($this->image);
        }

        $this->image = null;
    }

    protected function validateMapData(array $mapData): void
    {
        if (! isset($mapData['snr']) || ! isset($mapData['numCols']) || ! isset($mapData['numRows'])) {
            throw new InvalidArgumentException('Invalid map data. Required keys: snr, numCols, numRows');
        }

        if (! is_array($mapData['snr']) || ! is_int($mapData['numCols']) || ! is_int($mapData['numRows'])) {
            throw new InvalidArgumentException('Invalid map data. Required types: snr: array, numCols: int, numRows: int');
        }

        if (count($mapData['snr']) !== $mapData['numCols'] * $mapData['numRows']) {
            throw new InvalidArgumentException('SNR array size does not match dimensions');
        }

        if (empty($mapData['snr'])) {
            throw new InvalidArgumentException('SNR array is empty');
        }

        if ($mapData['numCols'] < 1 || $mapData['numRows'] < 1) {
            throw new InvalidArgumentException('Invalid map dimensions');
        }
    }

    protected function validateHexColor(string $color): string
    {
        $color = ltrim($color, '#');

        if (! preg_match('/^[0-9A-Fa-f]{6}$/', $color)) {
            throw new InvalidArgumentException("Invalid hex color code: $color");
        }

        return strtoupper($color);
    }

    public function obstructedColor(string $color): self
    {
        $this->obstructedColor = $this->validateHexColor($color);

        return $this;
    }

    public function unobstructedColor(string $color): self
    {
        $this->unobstructedColor = $this->validateHexColor($color);

        return $this;
    }

    public function noDataColor(string $color): self
    {
        $this->noDataColor = $this->validateHexColor($color);

        return $this;
    }

    public function grayscale(bool $grayscale = true): self
    {
        $this->grayscale = $grayscale;

        return $this;
    }

    public function proportional(bool $proportional): self
    {
        $this->proportional = $proportional;

        return $this;
    }

    public function transparent(bool $is_transparent = true): self
    {
        $this->transparent = $is_transparent;

        return $this;
    }

    public function opacity(float $opacity): self
    {
        if ($opacity < 0 || $opacity > 1) {
            throw new InvalidArgumentException('Opacity must be between 0 and 1');
        }
        $this->opacity = $opacity;

        return $this;
    }

    public function generate(): self
    {
        // Extract map data
        $snr = $this->mapData['snr'];
        $width = $this->mapData['numCols'];
        $height = $this->mapData['numRows'];

        // Calculate min and max values
        $min = 0;
        $max = 1;

        $range = $max - $min;

        // Create image
        $this->image = imagecreatetruecolor($width, $height) ?: null;

        if ($this->image === null) {
            throw new \RuntimeException('Failed to create image');
        }

        // Enable transparency if needed
        if ($this->transparent) {
            imagealphablending($this->image, false);
            imagesavealpha($this->image, true);
        }

        // Create a transparent color
        $transparent = imagecolorallocatealpha($this->image, 255, 255, 255, 127);

        // Helper function to convert hex to RGB
        $hex2rgb = function ($hex) {
            return [
                'r' => hexdec(substr($hex, 0, 2)),
                'g' => hexdec(substr($hex, 2, 2)),
                'b' => hexdec(substr($hex, 4, 2)),
            ];
        };

        // Prepare colors
        $obstructedColor = $hex2rgb($this->obstructedColor);
        $unobstructedColor = $hex2rgb($this->unobstructedColor);
        $noDataColor = $hex2rgb($this->noDataColor);

        // Change it the other way around
        $opacity = 1 - $this->opacity;

        // Fill the background
        if ($this->transparent) {
            imagefilledrectangle($this->image, 0, 0, $width, $height, $transparent);
        } else {
            $noDataColorAllocated = imagecolorallocate($this->image, $noDataColor['r'], $noDataColor['g'],
                $noDataColor['b']);
            imagefilledrectangle($this->image, 0, 0, $width, $height, $noDataColorAllocated);
        }

        // Process each pixel
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $value = $snr[$y * $width + $x];

                if ($value < 0.0) {
                    continue;
                }

                // Greyscale mode
                if ($this->grayscale) {
                    $colorValue = (int) round((($value - $min) / $range) * 255);
                    $alphaColor = (int) round(127 - (127 * $this->opacity));
                    $color = imagecolorallocatealpha($this->image, $colorValue, $colorValue, $colorValue, $alphaColor);
                } else {
                    // Color mode
                    if ($value > 0.0 && $value < 0.90) {
                        $color = $obstructedColor;
                        $multiplier = 1.0 - $value;
                        $alphaColor = (int) round(127 - (127 * (1 * $this->opacity * $multiplier)));
                    } elseif ($value >= 0.90) {
                        $color = $unobstructedColor;
                        $multiplier = $value;
                        $alphaColor = (int) round(127 - (127 * $this->opacity));
                    } else {
                        $color = $noDataColor;
                        $multiplier = 0.0;
                        $alphaColor = 0;

                        if ($this->transparent) {
                            imagesetpixel($this->image, $x, $y, $transparent);

                            continue;
                        }
                    }

                    // Proportional coloring
                    if ($this->proportional) {
                        $color['r'] = round($color['r'] * $multiplier);
                        $color['g'] = round($color['g'] * $multiplier);
                        $color['b'] = round($color['b'] * $multiplier);
                    }

                    // Handle alpha
                    if ($this->transparent) {
                        $color = imagecolorallocatealpha($this->image, $color['r'], $color['g'], $color['b'],
                            $alphaColor);
                    } else {
                        $color = imagecolorallocate($this->image, $color['r'], $color['g'], $color['b']);
                    }
                }

                // Set pixel color
                imagesetpixel($this->image, $x, $y, $color);
            }
        }

        return $this;
    }

    public function asFile(string $outputPath = 'obstruction_map.png'): bool
    {
        if ($this->image === null) {
            $this->generate();
        }

        return imagepng($this->image, $outputPath);
    }

    public function asBase64String(): string
    {
        if ($this->image === null) {
            $this->generate();
        }

        ob_start();
        imagepng($this->image);
        $imageData = ob_get_clean();

        return base64_encode($imageData);
    }

    public function asDataUri(): string
    {
        $base64 = $this->asBase64String();

        return "data:image/png;base64,{$base64}";
    }
}
