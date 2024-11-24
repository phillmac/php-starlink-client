# gRPC Protoset Converter

[![Latest Stable Version](https://poser.pugx.org/srwiez/starlink-client/v)](https://packagist.org/packages/srwiez/starlink-client)
[![Total Downloads](https://poser.pugx.org/srwiez/starlink-client/downloads)](https://packagist.org/packages/srwiez/starlink-client)
[![License](https://poser.pugx.org/srwiez/starlink-client/license)](https://packagist.org/packages/srwiez/starlink-client)
[![PHP Version Require](https://poser.pugx.org/srwiez/starlink-client/require/php)](https://packagist.org/packages/srwiez/starlink-client)
[![GitHub Workflow Status (with event)](https://img.shields.io/github/actions/workflow/status/srwiez/php-starlink-client/test.yml?label=Tests)](https://github.com/srwiez/php-starlink-client/actions/workflows/test.yml)

WIP WIP WIP WIP WIP WIP WIP WIP

## 🚀 Installation

```bash
composer require srwiez/starlink-client
```

## 📚 Usage

## 📋 TODO
Contributions are welcome!

- Write tests by using the starlink protoset file

## 🧑‍🔧 Building the client
If you have a starlink in your local network, you can update the client by running the following command.

Before running the command, make sure you have the `grpcurl` and `protoc` installed on your system.

```bash
./update_client.sh
```

## 🤝 Contributing
Clone the project and run `composer update` to install the dependencies.

Before pushing your changes, run `composer qa`. 

This will run [pint](http://github.com/laravel/pint) (code style), [phpstan](http://github.com/phpstan/phpstan) (static analysis), and [pest](http://github.com/pestphp/pest) (tests).


## 👥 Credits

gRPC Protoset Converter was created by Eser DENIZ.

The following projects inspired this library and served as a reference:

- https://github.com/ewilken/starlink-rs
- https://github.com/sparky8512/starlink-grpc-tools/tree/main
- https://github.com/fullstorydev/grpcurl

## 📝 License

gRPC Protoset Converter is licensed under the MIT License. See LICENSE for more information.
