<?php

namespace MirazMac\BanglaString\Contracts;

/**
 * TranslatorContract
 */
interface TranslatorContract
{
    /**
     * Translates a given string
     *
     * @param      string  $string  The string
     *
     * @return     string
     */
    public function translate($string);
}
