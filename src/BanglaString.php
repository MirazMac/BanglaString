<?php

namespace MirazMac\BanglaString;

use MirazMac\BanglaString\Translator\AvroToBijoy\Translator as AvroToBijoyTranslator;
use MirazMac\BanglaString\Translator\BijoyToAvro\Translator as BijoyToAvroTranslator;

/**
* BanglaString
*
* This is not an ideal way to use this, but when I created this I knew very little about OOP.
* You should directly import the Translator classes and use them as such.
* However this will stay as is for backwards compatibility reasons.
*
* @author Miraz Mac <mirazmac@gmail.com>
* @link https://mirazmac.info Author Homepage
* @version 0.1
* @license LICENSE The MIT License
* @package MirazMac\BanglaString
*/

class BanglaString
{
    /**
     * Loaded string
     *
     * @var string
     */
    protected $string;

    /**
     * Translator instances
     *
     * @var        array
     */
    protected $translators = [];

    /**
     * Create a new BanglaString instance
     *
     * @param string $string The text to be converted
     * @throws \InvalidArgumentException When passed parameter is not string
     */
    public function __construct($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException(__CLASS__ .'::translate() expects parameter $string to be string, ' . gettype($string) . ' given!');
        }

        $this->string = $string;
    }

    /**
     * This is identical as self::__construct(), but the difference is it allows to call the method  statically
     *
     * @param string $string The text to be converted
     * @return self
     */
    public static function translate($string)
    {
        return new self($string);
    }

    /**
     * Gets the translator.
     *
     * @param      string  $name   The name
     *
     * @return      \MirazMac\BanglaString\Contracts\TranslatorContract
     */
    protected function getTranslator($name)
    {
        if (!isset($this->translators[$name])) {
            $this->translators[$name] = new $name();
        }

        return $this->translators[$name];
    }

    /**
     * Translate the loaded string to Bijoy ANSI
     *
     * @return string
     */
    public function toBijoy()
    {
        return $this->getTranslator(AvroToBijoyTranslator::class)->translate($this->string);
    }

    /**
     * Translate the loaded string to Avro Unicode
     *
     * @return string
     */
    public function toAvro()
    {
        return $this->getTranslator(BijoyToAvroTranslator::class)->translate($this->string);
    }
}
