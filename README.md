# BanglaString
A wannabe all-in-all Bangla String manipulation/transformation library for PHP.


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

### AvroToBijoy

Takes Bengali strings written in Avro Unicode and translates into Bijoy Classic ANSI

Usage:

```php
$translator = new \MirazMac\BanglaString\Translator\AvroToBijoy\Translator;
echo $translator->translate('জানার আছে অনেক কিছু');
```

### BijoyToAvro

Takes Bengali strings written in Bijoy Classic ANSI and translates into Avro Unicode

Usage:

```php
$translator = new \MirazMac\BanglaString\Translator\BijoyToAvro\Translator;
echo $translator->translate('Rvbvi Av?Q A?bK wKQz!');
```
