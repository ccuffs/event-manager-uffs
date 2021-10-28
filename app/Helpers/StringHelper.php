<?php


namespace App\Helpers;


class StringHelper
{
    /**
     * Format a federal registration according to its type
     *
     * @param $value
     * @return bool|string
     * @throws Exception
     */
    static function formatarInscricaoFederal($value)
    {
        $value = StringHelper::onlyNumbers($value);

        if (strlen($value) == 10) {
            $value = str_pad($value, 11, "0", STR_PAD_LEFT);
        }

        switch (strlen($value)) {
            case 11:
                $mask = '###.###.###-##';
                break;
            default:
                $mask = '##.###.###/####-##';
                break;
        }

        return StringHelper::mask($value, $mask);
    }

    /**
     * Mask a string according to a param $mask
     * @param $str
     * @param $mask
     * @return mixed
     */
    static function mask($str, $mask)
    {
        $str = StringHelper::onlyNumbers($str);
        $str = str_replace(' ', '', $str);

        for ($i = 0; $i < strlen($str); $i++) {
            $mask_pos = strpos($mask, "#");

            if ($mask_pos === false)
                return null;

            $mask[$mask_pos] = $str[$i];
        }

        return $mask;
    }

    /**
     * remove dots from a string
     * @param $string
     * @return null|string
     */
    static function onlyNumbers($string)
    {
        return preg_replace('/[^0-9]/i', '', $string);
    }

    /**
     * Returns a string with every first letter in upper case
     * @param $string
     * @return null|string
     */
    static function firstLetterInUpper($name)
    {
        return ucfirst(strtolower($name));
    }
}
