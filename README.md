haveibeenpwned-bundle
=====================

[![Build Status](https://img.shields.io/github/workflow/status/webeweb/haveibeenpwned-bundle/build?style=flat-square)](https://github.com/webeweb/haveibeenpwned-bundle/actions)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/webeweb/haveibeenpwned-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/haveibeenpwned-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/haveibeenpwned-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/haveibeenpwned-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/haveibeenpwned-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/haveibeenpwned-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/haveibeenpwned-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)

Integrate HaveIBeenPwned API with Symony 2 and more.

Includes:

- [webeweb/haveibeenpwned-library](https://github.com/webeweb/haveibeenpwned-library)

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/syntaxhighlighter-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E2.7%7C%5E3.0%7C%5E4.0-brightness.svg?style=flat-square)](https://symfony.com)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/haveibeenpwned-bundle
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
    public function registerBundles() {
        $bundles = [
            // ...
            new WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console assets:install
```

## Usage

Read the [documentation](Resources/doc/index.md).

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/haveibeenpwned-bundle.git
$ cd haveibeenpwned-bundle
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

## License

`haveibeenpwned-bundle` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
