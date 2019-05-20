haveibeenpwned-bundle
=====================

[![Build Status](https://travis-ci.com/webeweb/haveibeenpwned-bundle.svg?branch=master)](https://travis-ci.com/webeweb/haveibeenpwned-bundle)
[![Coverage Status](https://coveralls.io/repos/github/webeweb/haveibeenpwned-bundle/badge.svg?branch=master)](https://coveralls.io/github/webeweb/haveibeenpwned-bundle?branch=master)
[![Latest Stable Version](https://poser.pugx.org/webeweb/haveibeenpwned-bundle/v/stable)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![Latest Unstable Version](https://poser.pugx.org/webeweb/haveibeenpwned-bundle/v/unstable)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![License](https://poser.pugx.org/webeweb/haveibeenpwned-bundle/license)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)
[![composer.lock](https://poser.pugx.org/webeweb/haveibeenpwned-bundle/composerlock)](https://packagist.org/packages/webeweb/haveibeenpwned-bundle)

Integrate HaveIBeenPwned API with Symony 2 and more.

Includes:

- [webeweb/haveibeenpwned-library](https://github.com/webeweb/haveibeenpwned-library)

---

## Compatibility

[![PHP](https://img.shields.io/badge/PHP-%5E5.6%7C%5E7.0-blue.svg)](http://php.net)
[![Symfony](https://img.shields.io/badge/Symfony-%5E2.7%7C%5E3.0%7C%5E4.0-brightgreen.svg)](https://symfony.com)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/haveibeenpwned-bundle "^1.0"
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

---

## Usage

Read the [documentation](Resources/doc/index.md).

---

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

---

## License

`haveibeenpwned-bundle` is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.
