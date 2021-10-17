<?php

namespace MirazMac\BanglaString\Translator\AvroToBijoy;

/**
 * Stores List of Character Maps to use across the library
 *
 * @version 0.1
 * @since 0.1
 * @package MirazMac\BanglaString
 */

class CharacterMap
{
    /**
     * Get Letter replacement map as an array
     * Avro => Bijoy format
     *
     * @return array
     */
    public static function getLetterCharMap()
    {
        return [
        /** Juktabarnas */
        'ক্ক' => '°', 'ক্ট' => '±', 'ক্ট্র' => '±ª', 'ক্ত' => '³', 'ক্ত্র' => '³«',
        'ক্ব' => 'K¡', 'ক্ম' => '´', 'ক্য' => 'K¨', 'ক্র' => 'µ', 'ক্ল' => 'K¬',
        'ক্ষ্ণ' => '¶è', 'ক্ষ্ব' => '¶¡', 'ক্ষ্ম' => '²', 'ক্ষ্ম্য' => '²¨',
        'ক্ষ্য' => '¶¨', 'ক্ষ' => '¶', 'ক্স' => '·', 'খ্য' => 'L¨', 'খ্র' => 'Lª',
        'গ্‌ণ' => 'M&Y', 'গ্ধ' => '»', 'গ্ধ্য' => '»¨', 'গ্ধ্র' => '»ª', 'গ্ন' => 'Mœ',
        'গ্ন্য' => 'Mœ¨', 'গ্ব' => 'M¦', 'গ্ম' => 'M¥', 'গ্য' => 'M¨', 'গ্র' => 'MÖ',
        'গ্র্য' => 'M¨©', 'গ্ল' => 'M­', 'ঘ্ন' => 'Nœ', 'ঘ্য' => 'N¨', 'ঘ্র' => 'Nª',
        'ঙ্ক' => '¼', 'ঙ্‌ক্ত' => 'O&³', 'ঙ্ক্য' => '¼¨', 'ঙ্ক্ষ' => '•¶', 'ঙ্খ' => '•L',
        'ঙ্গ' => '½', 'ঙ্গ্য' => '½¨', 'ঙ্ঘ' => '•N', 'ঙ্ঘ্য' => '•N¨', 'ঙ্ঘ্র' => '•Nª',
        'ঙ্ম' => '•g', 'চ্চ' => '”P', 'চ্ছ' => '”Q', 'চ্ছ্ব' => '”Q¡', 'চ্ছ্র' => '”Qª',
        'চ্ঞ' => '”T', 'চ্ব' => '”¡', 'চ্য' => 'P¨', 'জ্জ' => '¾', 'জ্জ্ব' => '¾¡',
        'জ্ঝ' => 'À', 'জ্ঞ' => 'Á', 'জ্ব' => 'R¡', 'জ্য' => 'R¨', 'জ্র' => 'Rª',
        'ঞ্চ' => 'Â', 'ঞ্ছ' => 'Ã', 'ঞ্জ' => 'Ä', 'ঞ্ঝ' => 'Å', 'ট্ট' => 'Æ',
        'ট্ব' => 'U¡', 'ট্ম' => 'U¥', 'ট্য' => 'U¨', 'ট্র' => 'Uª', 'ড্ড' => 'Ç',
        'ড্ব' => 'W¡', 'ড্য' => 'W¨', 'ড্র' => 'Wª', 'ড়্গ' => 'ÿ', 'ঢ্য' => 'X¨',
        'ঢ্র' => 'Xª', 'ণ্ট' => 'È', 'ণ্ঠ' => 'É', 'ণ্ঠ্য' => 'É¨', 'ণ্ড' => 'Ê',
        'ণ্ড্য' => 'Ê¨', 'ণ্ড্র' => 'Êª', 'ণ্ঢ' => 'YX', 'ণ্ণ' => 'Yè', 'ণ্ব' => 'Y¡',
        'ণ্ম' => 'Y¥', 'ণ্য' => 'Y¨', 'ৎক' => 'rK', 'ত্ত' => 'Ë', 'ত্ত্ব' => 'Ë¡',
        'ত্ত্য' => 'Ë¨', 'ত্থ' => 'Ì', 'ত্ন' => 'Zœ', 'ত্ব' => 'Z¡', 'ত্ম' => 'Í',
        'ত্ম্য' => 'Í¨', 'ত্য' => 'Z¨', 'ত্র' => 'Î', 'ত্র্য' => 'Z¨©', 'ৎল' => 'rj',
        'ৎস' => 'rm', 'থ্ব' => '_¡', 'থ্য' => '_¨', 'থ্র' => '_ª', 'দ্গ' => '˜M',
        'দ্ঘ' => '™N', 'দ্দ' => 'Ï', 'দ্দ্ব' => 'Ï¡', 'দ্ধ' => '×', 'দ্ব' => 'Ø',
        'দ্ভ' => '™¢', 'দ্ভ্র' => '™£', 'দ্ম' => 'Ù', 'দ্য' => '`¨', 'দ্র' => '`ª',
        'দ্র্য' => '`¨©', 'ধ্ন' => 'aœ', 'ধ্ব' => 'aŸ', 'ধ্ম' => 'a¥', 'ধ্র' => 'aª',
        'ন্ট্র' => '›Uª', 'ন্ট' => '›U', 'ন্ঠ' => 'Ú', 'ন্ড' => 'Û', 'ন্ড্র' => 'Ûª',
        'ন্ত্ব' => 'š—¡', 'ন্ত্য' => 'š—¨', 'ন্ত্র' => 'š¿', 'ন্ত্র্য' => 'š—¨©',
        'ন্ত' => 'š—', 'ন্থ্র' => 'š’ª', 'ন্থ' => 'š’', 'ন্দ' => '›`', 'ন্দ্য' => '›`¨',
        'ন্দ্ব' => '›Ø', 'ন্দ্র' => '›`ª', 'ন্ধ্য' => 'Ü¨', 'ন্ধ্র' => 'Üª', 'ন্ধ' => 'Ü',
        'ধ্য' => 'a¨', 'ন্ন' => 'bœ', 'ন্ব' => 'š^', 'ন্ম' => 'b¥', 'ন্য' => 'b¨',
        'প্ট' => 'Þ', 'প্ত' => 'ß', 'প্ন' => 'cœ', 'প্প' => 'à', 'প্য' => 'c¨',
        'প্র' => 'cÖ', 'প্র্য' => 'c¨©', 'প্ল' => 'c­', 'প্স' => 'á', 'ফ্র' => 'd«',
        'ফ্ল' => 'd¬', 'ব্জ' => 'â', 'ব্দ' => 'ã', 'ব্ধ' => 'ä', 'ব্ব' => 'eŸ',
        'ব্য' => 'e¨', 'ব্র' => 'eª', 'ব্ল' => 'e­', 'ভ্ব' => 'f¡', 'ভ্য' => 'f¨',
        'ভ্র' => 'å', 'ম্ন' => 'æ', 'ম্প' => '¤c', 'ম্প্র' => '¤cÖ', 'ম্ফ' => 'ç',
        'ম্ব' => '¤^', 'ম্ব্র' => '¤^ª', 'ম্ভ' => '¤¢', 'ম্ভ্র' => '¤£', 'ম্ম' => '¤§',
        'ম্য' => 'g¨', 'ম্র' => 'gª', 'ম্ল' => '¤¬', 'অ্য' => 'A¨', 'য্য' => 'h¨',
        'র্ক' => 'K©', 'র্ক্য' => 'K¨©', 'র্গ্য' => 'M¨©', 'র্ঘ্য' => 'N¨©', 'র্চ্য' => 'P¨©',
        'র্জ্য' => 'R¨©', 'র্ণ্য' => 'Y¨©', 'র্ত্য' => 'Z¨©', 'র্থ্য' => '_¨©', 'র্ব্য' => 'e¨©',
        'র্ম্য' => 'g¨©', 'র্শ্য' => 'k¨©', 'র্ষ্য' => 'l¨©', 'র্হ্য' => 'n¨©', 'র্খ' => 'L©',
        'র্গ' => 'M©', 'র্গ্র' => 'MÖ©', 'র্ঘ' => 'N©', 'র্চ' => 'P©', 'র্ছ' => 'Q©',
        'র্জ' => 'R©', 'র্ঝ' => 'S©', 'র্ট' => 'U©', 'র্ড' => 'W©', 'র্ণ' => 'Y©',
        'র্ত' => 'Z©', 'র্ত্র' => 'Î©', 'র্থ' => '_©', 'র্দ' => '`©', 'র্দ্ব' => 'Ø©',
        'র্দ্র' => '`ª©', 'র্ধ' => 'a©', 'র্ধ্ব' => 'aŸ©', 'র্ন' => 'b©', 'র্প' => 'c©',
        'র্ফ' => 'd©', 'র্ভ' => 'f©', 'র্ম' => 'g©', 'র্য' => 'h©', 'র্ল' => 'j©',
        'র্শ' => 'k©', 'র্শ্ব' => 'k¦©', 'র্ষ' => 'l©', 'র্স' => 'm©', 'র্হ' => 'n©',
        'র্ঢ্য' => 'X¨©', 'ল্ক' => 'é', 'ল্ক্য' => 'é¨', 'ল্গ' => 'ê', 'ল্ট' => 'ë',
        'ল্ড' => 'ì', 'ল্প' => 'í', 'ল্‌ফ' => 'j&d', 'ল্ব' => 'j¡', 'ল্‌ভ' => 'j&f',
        'ল্ম' => 'j¥', 'ল্য' => 'j¨', 'ল্ল' => 'j­', 'শ্চ' => 'ð', 'শ্ছ' => 'ñ',
        'শ্ন' => 'kœ', 'শ্ব' => 'k¦', 'শ্ম' => 'k¥', 'শ্য' => 'k¨', 'শ্র' => 'kª',
        'শ্ল' => 'k­', 'ষ্ক' => '®‹', 'ষ্ক্র' => '®Œ', 'ষ্ট' => 'ó', 'ষ্ট্য' => 'ó¨',
        'ষ্ট্র' => 'óª', 'ষ্ঠ' => 'ô', 'ষ্ঠ্য' => 'ô¨', 'ষ্ণ' => 'ò', 'ষ্প' => '®c',
        'ষ্প্র' => '®cÖ', 'ষ্ফ' => 'õ', 'ষ্ব' => '®^', 'ষ্ম' => '®§', 'ষ্য' => 'l¨',
        'স্ক' => '¯‹', 'স্ক্র' => '¯Œ', 'স্খ' => 'ö', 'স্ট' => '÷', 'স্ট্র' => '÷ª',
        'স্ত' => '¯—', 'স্ত্ব' => '¯—¡', 'স্ত্য' => '¯—¨', 'স্ত্র' => '¯¿', 'স্থ' => '¯’',
        'স্থ্য' => '¯’¨', 'স্ন' => 'ø', 'স্প' => '¯c', 'স্প্র' => '¯cÖ', 'স্প্‌ল' => '¯c&j',
        'স্ফ' => 'ù', 'স্ব' => '¯^', 'স্ম' => '¯§', 'স্য' => 'm¨', 'স্র' => 'mª',
        'স্ল' => '¯¬', 'হ্ণ' => 'nœ', 'হ্ন' => 'ý', 'হ্ব' => 'nŸ', 'হ্ম' => 'þ',
        'হ্য' => 'n¨', 'হ্র' => 'nª', 'হ্ল' => 'n¬', 'ভ্ল' => 'f¬',

        /** Sharbarnas */
        'ঁ' => 'u', 'ং' => 's', 'ঃ' => 't', 'আ' => 'Av', 'অ' => 'A',
        'ই' => 'B', 'ঈ' => 'C', 'উ' => 'D', 'ঊ' => 'E', 'ঋ' => 'F',
        'ঌ' => 'ঌ', 'এ' => 'G', 'ঐ' => 'H', 'ও' => 'I', 'ঔ' => 'J',

        /** Byanjon Barnas */
        'ক' => 'K', 'খ' => 'L', 'গ' => 'M', 'ঘ' => 'N', 'ঙ' => 'O',
        'চ' => 'P', 'ছ' => 'Q', 'জ' => 'R', 'ঝ' => 'S', 'ঞ' => 'T',
        'ট' => 'U', 'ঠ' => 'V', 'ড' => 'W', 'ঢ' => 'X', 'ণ' => 'Y',
        'ত' => 'Z', 'থ' => '_', 'দ' => '`', 'ধ' => 'a', 'ন' => 'b',
        'প' => 'c', 'ফ' => 'd', 'ব' => 'e', 'ভ' => 'f', 'ম' => 'g',
        'য' => 'h', 'র' => 'i', 'ল' => 'j', 'শ' => 'k', 'ষ' => 'l',
        'স' => 'm', 'হ' => 'n', '়' => '়', 'ঽ' => 'ঽ',

        /** Simple Kars */
        'া' => 'v', 'ী' => 'x', 'ু' => 'y', 'ূ' => '‚', 'ৃ' => '„',
        'ৄ' => 'ৄ', '্' => '', 'ৎ' => 'r', 'ৗ' => '', 'ড়' => 'o',
        'ঢ়' => 'p', 'য়' => 'q', 'ৠ' => 'ৠ',

        /** Numeric chars. */
        '০' => '0', '১' => '1', '২' => '2', '৩' => '3', '৪' => '4', '৫' => '5',
        '৬' => '6', '৭' => '7', '৮' => '8', '৯' => '9', '।' => '|'
        ];
    }

    /**
     * Get list of kars for Bijoy ANSI
     *
     * @return string
     */
    public static function getBijoyKars()
    {
        return "(°|±|±ª|³|³«|K¡|´|K¨|µ|K¬|¶|¶è|¶¡|²|²¨|¶¨|·|L¨|Lª|M&Y|»|»¨|»ª|Mœ|Mœ¨|M¦|M¥|M¨|MÖ|M¨©|M­|Nœ|N¨|Nª|¼|O&³|¼¨|•¶|•L|½|½¨|•N|•N¨|•Nª|•g|”P|”Q|”Q¡|”Qª|”T|”¡|P¨|¾|¾¡|À|Á|R¡|R¨|Rª|Â|Ã|Ä|Å|Æ|U¡|U¥|U¨|Uª|Ç|W¡|W¨|Wª|ÿ|X¨|Xª|È|É|É¨|Ê|Ê¨|Êª|YX|Yè|Y¡|Y¥|Y¨|rK|Ë|Ë¡|Ë¨|Ì|Zœ|Z¡|Í|Í¨|Z¨|Î|Z¨©|rj|rm|_¡|_¨|_ª|˜M|™N|Ï|Ï¡|×|Ø|™¢|™£|Ù|`¨|`ª|`¨©|aœ|aŸ|a¥|a¨|aª|›U|›Uª|Ú|Û|Ûª|š—|š—¡|š—¨|š¿|š—¨©|š’|š’ª|›`|›`¨|›Ø|›`ª|Ü|Ü¨|Üª|bœ|š^|b¥|b¨|Þ|ß|cœ|à|c¨|cÖ|c¨©|c­|á|d«|d¬|â|ã|ä|eŸ|e¨|eª|e­|f¡|f¨|å|æ|¤c|¤cÖ|ç|¤^|¤^ª|¤¢|¤£|¤§|g¨|gª|¤¬|h¨|K©|K¨©|M¨©|N¨©|P¨©|R¨©|Y¨©|Z¨©|_¨©|e¨©|g¨©|k¨©|l¨©|n¨©|L©|M©|MÖ©|N©|P©|Q©|R©|S©|U©|W©|Y©|Z©|Î©|_©|`©|Ø©|`ª©|a©|aŸ©|b©|c©|d©|f©|g©|h©|j©|k©|k¦©|l©|m©|n©|X¨©|é|é¨|ê|ë|ì|í|j&d|j¡|j&f|j¥|j¨|j­|ð|ñ|kœ|k¦|k¥|k¨|kª|k­|®‹|®Œ|ó|ó¨|óª|ô|ô¨|ò|®c|®cÖ|õ|®^|®§|l¨|¯‹|¯Œ|ö|÷|÷ª|¯—|¯—¡|¯—¨|¯¿|¯’|¯’¨|ø|¯c|¯cÖ|¯c&j|ù|¯^|¯§|m¨|mª|¯¬|nœ|ý|nŸ|þ|n¨|nª|n|F|K|L|M|N|O|P|Q|R|S|T|U|V|W|X|Y|Z|_|`|a|b|c|d|e|f|g|h|i|j|k|l|m|n|o|p|q)(ি|ে|ো|ৌ|ৈ)";
    }

    /**
     * Get list of kars for Avro
     *
     * @return string
     */
    public static function getAvroKars()
    {
        return "(‡|†|w)(ক্ক|ক্ট|ক্ট্র|ক্ত|ক্ত্র|ক্ব|´|ক্য|ক্র|ক্ল|ক্ষ|ক্ষè|ক্ষ¡|ক্ষ্ম|ক্ষ্ম্য|ক্ষ্য|ক্স|খ্য|খ্র|গ্ণ|গ্ধ|গ্ধ্য|গ্ধ্র|গ্ন|গ্ন্য|গ¦|গ্ম|গ্য|গ্র|র্গ্য|গ্ল|ঘœ|ঘ্য|ঘ্র|ঙ্ক|ঙ্ক্ত|ঙ্ক্য|ক্সক্ষ|ঙ্খ|ঙ্গ|ঙ্গ্য|ঙ্ঘ|ঙ্ঘ্য|ঙ্ঘ্র|ক্সম|চ্চ|চ্ছ|চ্ছ্ব|চ্ছ্র|চ্ঞ|”¡|চ্য|জ্জ|জ্জ্ব|জ্ঝ|জ্ঞ|জ্ব|জ্য|জ্র|ঞ্চ|ঞ্ছ|ঞ্জ|ঞ্ঝ|ট্ট|ট্ব|ট্ম|ট্য|ট্র|ড্ড|ড¡|ড্য|ড্র|ক্ষ|ঢ্য|ঢ্র|ণ্ট|ণ্ঠ|ণ্ঠ্য|ণ্ড|ণ্ড্য|ণ্ড্র|ণঢ|ণè|ণ¡|ণ¥|ণ্য|ৎক|ত্ত|ত্ত্ব|ত্ত্য|ত্থ|তœ|ত্ব|Í|Í্য|ত্য|ত্র|র্ত্য|ৎল|ৎস|থ্ব|থ্য|থ্র|দ্গ|™ঘ|দ্দ|দ্দ¡|দ্ধ|দ্ব|দ্ভ|™£|দ্ম|দ্য|দ্র|র্দ্য|ধœ|ধ্ব|ধ্ম|ধ্য|ধ্র|ন্ট|ন্ট্র|ন্ঠ|ন্ড|ন্ড্র|ন্ত|ন্ত্ব|ন্ত্য|ন্ত্র|র্ন্ত্য|ন্থ|ন্থ্র|ন্দ|ন্দ্য|ন্দ্ব|ন্দ্র|ন্ধ|ন্ধ্য|ন্ধ্র|ন্ন|ন্ব|ন্ম|ন্য|প্ট|প্ত|প্ন|প্প|প্য|প্র|র্প্য|প্ল|প্স|ফ্র|ফ্ল|ব্জ|ব্দ|ব্ধ|ব্ব|ব্য|ব্র|ব্ল|ভ¡|ভ্য|ভ্র|ু|¤প|ম্প্র|ম্ফ|ম্ব|ম্ব্র|ম্ভ|ম্ভ্র|ম্ম|ম্য|ম্র|¤¬|য্য|র্ক|র্ক্য|র্গ্য|র্ঘ্য|র্চ্য|র্জ্য|র্ণ্য|র্ত্য|র্থ্য|র্ব্য|র্ম্য|র্শ্য|র্ষ্য|র্হ্য|র্খ|র্গ|র্গ্র|র্ঘ|র্চ|র্ছ|র্জ|র্ঝ|র্ট|র্ড|র্ণ|র্ত|র্ত্র|র্থ|র্দ|র্দ্ব|র্দ্র|র্ধ|র্ধ্ব|র্ন|র্প|র্ফ|র্ভ|র্ম|র্য|র্ল|র্শ|র্শ্ব|র্ষ|র্স|র্হ|র্ঢ্য|ল্ক|ল্ক্য|ল্গ|ল্ট|ল্ড|ল্প|ল্ফ|ল¡|ল্ভ|ল্ম|ল্য|ল্ল|শ্চ|ñ|শ্ন|শ্ব|শ্ম|শ্য|শ্র|শ্ল|ষ্ক|ষ্ক্র|ষ্ট|ষ্ট্য|ষ্ট্র|ষ্ঠ|ষ্ঠ্য|ষ্ণ|®প|®প্র|ষ্ফ|®^|ষ্ম|ষ্য|স্ক|স্ক্র|স্খ|স্ট|স্ট্র|স্ত|স্ত¡|স্ত্য|স্ত্র|স্থ|স্থ্য|ø|¯প|¯প্র|¯প্ল|স্ফ|স্ব|স্ম|স্য|স্র|¯¬|হœ|হ্ন|হ্ব|হ্ম|হ্য|হ্র|হ|ঋ|ক|খ|গ|ঘ|ঙ|চ|ছ|জ|ঝ|ঞ|ট|ঠ|ড|ঢ|ণ|ত|থ|দ|ধ|ন|প|ফ|ব|ভ|ম|য|র|ল|শ|ষ|স|হ|ড়|ঢ়|য়)";
    }
}
