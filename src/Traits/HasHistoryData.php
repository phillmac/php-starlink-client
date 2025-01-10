<?php

namespace SRWieZ\StarlinkClient\Traits;

trait HasHistoryData
{
    public static function reorderHistoryData(array $array, int $current): array
    {
        // Calculate the rotation point
        $startIndex = $current % self::$historyBufferSize;

        // Slice and combine the array to reorder
        return array_merge(
            array_slice($array, $startIndex),
            array_slice($array, 0, $startIndex)
        );
    }
}
