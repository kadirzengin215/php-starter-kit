# PHP Starter kit

PHP starter kit is a simple PHP starter kit that provides the basic files and configuration for building modern PHP applications.

[![tests](https://github.com/kadirzengin215/php-starter-kit/actions/workflows/tests.yml/badge.svg)](https://github.com/kadirzengin215/php-starter-kit/actions/workflows/tests.yml)
![GitHub License](https://img.shields.io/github/license/kadirzengin215/php-starter-kit)

## 🚀 Getting Started

### Prerequisites

Ensure you have [PHP >= 8.4](https://www.php.net/downloads) and [Composer](https://getcomposer.org/) installed.

### Installation and Usage

- **Clone the repository:**

    ```bash
    git clone https://github.com/kadirzengin215/php-starter-kit.git
    ```

- **Navigate to the project directory:**

    ```bash
    cd php-starter-kit
    ```

- **Install dependencies:**

    ```bash
    composer install
    ```

- **Testing:**

    ```bash
    composer test
    ```

### Available Composer Scripts

You can run several scripts via Composer to check code quality, run tests, and apply code formatting:

| Script                 | Command                       | Description                                     |
| ---------------------- | ----------------------------- | ----------------------------------------------- |
| **test**               | `composer test`               | Run all test/check scripts below in sequence.   |
| **test:phpstan**       | `composer test:phpstan`       | Run static analysis using PHPStan.              |
| **test:pest**          | `composer test:pest`          | Run tests with Pest (plus coverage, parallel).  |
| **test:type-coverage** | `composer test:type-coverage` | Run Pest for type coverage checks.              |
| **test:rector**        | `composer test:rector`        | Check code quality with Rector in dry-run mode. |
| **test:lint**          | `composer test:lint`          | Run Pint on project to check code style.        |
| **run:rector**         | `composer run:rector`         | Apply Rector code transformations.              |
| **run:lint**           | `composer run:lint`           | Apply Pint code formatting.                     |

> See [`composer.json`](composer.json) for more details on all scripts.

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
