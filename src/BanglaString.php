<?php

namespace MirazMac\BanglaString;

/**
* BanglaString
*
* A wannabe all-in-all Bangla String Manupulation Library!
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
     * @return object
     */
    public static function translate($string)
    {
        return new self($string);
    }

    /**
     * Translate the loaded string to Bijoy ANSI
     *
     * @return string
     */
    public function toBijoy()
    {
        return Translator\AvroToBijoy\Translator::getInstance()->translate($this->string);
    }

    /**
     * Translate the loaded string to Avro Unicode
     *
     * @return string
     */
    public function toAvro()
    {
        return Translator\BijoyToAvro\Translator::getInstance()->translate($this->string);
    }
}
