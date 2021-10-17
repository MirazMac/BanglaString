<?php

namespace MirazMac\BanglaString\Translator\AvroToBijoy;

use MirazMac\BanglaString\Traits\SingletonTrait;
use MirazMac\BanglaString\Contracts\TranslatorContract;
use MirazMac\BanglaString\Translator\AvroToBijoy\CharacterMap;

/**
* Translates Bengali strings written in Avro Unicode to Bijoy ANSI
*
* @version 0.1
* @since 0.1
* @package MirazMac\BanglaString
*/

class Translator implements TranslatorContract
{
    use SingletonTrait;

    /**
     * Translates Avro Unicode string to Bijoy ANSI
     *
     * @param  string $string Text written via avro
     * @return string
     */
    public function translate($string)
    {
        // Import character maps
        $charmap = CharacterMap::getLetterCharMap();
        $kars = CharacterMap::getBijoyKars();

        // Pre-replacement - All the letters, numbers and juktabornas..
        $string = str_replace(array_keys($charmap), array_values($charmap), $string);

        // Post-replacement
        // Replace kars from the very beginning of the string
        $start_regex = "/\A{$kars}/um";
        $string = preg_replace_callback($start_regex, [$this, 'translateKarsCallbackStart'], $string);

        $space_before_regex = "/\s{$kars}/um";
        $string = preg_replace_callback($space_before_regex, [$this, 'translateKarsCallbackSpaceBefore'], $string);

        $anywhere_regex = "/{$kars}/um";
        $string = preg_replace_callback($anywhere_regex, [$this, 'translateKarsCallback'], $string);

        // Finally hand-over the string!
        return $string;
    }

    /**
     * Callback method for self::translate(), for strings that has "kar" at the
     * very beginning of the string
     *
     * @param  array  $match The matches
     * @return string
     */
    protected function translateKarsCallbackStart($match = [])
    {
        switch ($match[2]) {
            case 'ি':
                return 'w' . $match[1];

            case 'ে':
                return '†' . $match[1];

            case 'ো':
                return '†' . $match[1] . 'v';

            case 'ৈ':
                return 'ˆ' . $match[1];

            case 'ৌ':
                return '†' . $match[1] . 'Š';
        }
    }

   /**
     * Callback method for self::translate(), for strings that has "kar"
     * with a space before
     *
     * @param  array  $match The matches
     * @return string
     */
    protected function translateKarsCallbackSpaceBefore($match = [])
    {
        switch ($match[2]) {
            case 'ি':
                return ' w' . $match[1];

            case 'ে':
                return ' †' . $match[1];

            case 'ো':
                return ' †' . $match[1] . 'v';

            case 'ৈ':
                return ' ˆ' . $match[1];

            case 'ৌ':
                return ' †'.$match[1].'Š';
        }
    }

    /**
     * Callback method for self::translate(), for strings that has "kar" at anywhere in the string
     *
     * @param  array  $match The matches
     * @return string
     */
    protected function translateKarsCallback($match = [])
    {
        switch ($match[2]) {
            case 'ি':
                return 'w' . $match[1];

            case 'ে':
                return '‡' . $match[1];

            case 'ো':
                return '‡' . $match[1] . 'v';

            case 'ৈ':
                return '‰' . $match[1];

            case 'ৌ':
                return '‡'.$match[1].'Š';
        }
    }
}
