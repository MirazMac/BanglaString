<?php

namespace MirazMac\BanglaString\Translator\BijoyToAvro;

use MirazMac\BanglaString\Contracts\TranslatorContract;
use MirazMac\BanglaString\Translator\AvroToBijoy\KeyMapping;
use MirazMac\BanglaString\Translator\BijoyToAvro\CharacterMap;

/**
* Translates Bengali text written in Bijoy ANSI to Avro Unicode
*
* @version 0.1
* @since 0.1
* @package MirazMac\BanglaString
*/

class Translator implements TranslatorContract
{
    /**
     * Translates Bijoy ANSI text to Avro
     *
     * @param  string $string Text written via bijoy
     * @return string
     */
    public function translate($string)
    {
        // Import character maps
        $charmap = CharacterMap::getLetterCharMap();
        $kars = CharacterMap::getAvroKars();
        $def = $string;

        // Pre-replacement - All the letters, numbers and juktabornas..
        $string = str_replace(array_keys($charmap), array_values($charmap), $string);
        //



        // Build the regex pattern for post replacement
        $regex = "/{$kars}/um";
        // Post-replacement - All kars
        $string = preg_replace_callback($regex, [$this, 'translateKarsCallback'], $string);
        // Finally hand-over the string!
        return $string;
    }

    /**
     * Callback method for self::translate()
     *
     * @param  array  $match The matches
     * @return string
     */
    protected function translateKarsCallback($match = [])
    {
        switch ($match[1]) {
            case 'w':
                return $match[2] . 'ি'; // E~ kar

            case '†':
                return $match[2] . 'ে'; // A~ kar
            case 'ˆ':
                return $match[2] . 'ৈ'; // A~ kar

            case '‡':
                return $match[2] . 'ে'; // A~ Kar ( Bijoy has 2 of 'em )
        }
    }
}
