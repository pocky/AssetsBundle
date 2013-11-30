Getting Started With BlackAssetsBundle
======================================

This bundle is a suite of tools for your Symfony project and provides Bootstrap assets, buttons and a customised
fields for twig.

## Prerequisites

This bundle requires Symfony 2.3+ and PHP 5.4

### Translations

If you wish to use default texts provided in this bundle, you have to make sur you have translator enabled in your
config.

``` yaml
# app/config/config.yml

framework:
    translator: ~
```

For more information about translations, check
[Symfony documentation](http://symfony.com/doc/current/book/translation.html).


## Installation

Installation is very simple and stupid.

1. Download BlackAssetsBundle using composer
2. Enable your bundle
3. Champagne!

### Step 1: Download BlackAssetsBundle

Add BlackCommonBundle in your composer.json:

``` js
{
    "require": {
        "black/assets-bundle": "~0.2"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update black/assets-bundle
```

Composer will install the bundles to your project `vendor/black` directory.

### Step 2: Enable your bundles


Just load BlackAssetsBundle in your AppKernel.

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Black\Bundle\AssetsBundle\BlackAssetsBundle(),
    );
}
```

### Step 3: Champagne!

Now that you have completed the basic installation of the BlackAssetsBundle you are ready
to [use it](use.md)!



