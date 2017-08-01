# BanglaString
A wannabe all-in-all Bangla String Manupulation Library!



Hey there! **BanglaString** is willing to be the full featured, all in all, "Bengali" text manipulation library, for PHP. Right now, at its core, it supports translating aka converting Bengali text to **Avro Unicode** from **Bijoy ANSI** and vice-versa. However, in future, we are planning to add more Translator to its core.

### Install via composer

```shell
composer require mirazmac/bangla-string
```

### Manual Install

Download the latest release from [Releases](https://github.com/mirazmac/BanglaString/releases). Extract and require **src/autoload.php** in your code. But it's highly recommended to use [Composer](http://getcomposer.org).

```php
require 'src/autoload.php';
```



## Supported Translators

### AvroUnicode

Takes Bengali strings written in Avro Unicode and translates into Bijoy ANSI

Usage:

```php
require 'vendor/autoload.php';

use MirazMac\BanglaString\BanglaString;
$wizard = new BanglaString('জানার আছে অনেক কিছু!');
echo $wizard->toBijoy();
```

### BijoyAnsi

Takes Bengali strings written in Bijoy ANSI and translates into Avro Unicode

Usage:

```php
require 'vendor/autoload.php';

use MirazMac\BanglaString\BanglaString;
$wizard = new BanglaString('Rvbvi Av?Q A?bK wKQz!');
echo $wizard->toAvro();
```