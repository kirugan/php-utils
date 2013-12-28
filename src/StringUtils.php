<?php
/**
 * Description of StringUtils
 *
 * @author kirugan
 */
class StringUtils {
    function startsWith($haystack, $needle) {
        return !strncmp($haystack, $needle, strlen($needle));
    }

    function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }
    
    public static function removeNonEnglishChars($article) {
        $article = preg_replace('/[^\00-\255]+/u', '', $article);
        $str = str_replace('+', ' ', $article);
        return trim($str);
    }
    
    public static function removeRedundantWS($input){
        return preg_replace('!\s+!', ' ', $input);
    }
    
    public static function pluralForm($n, $forms) {
        return $n % 10 == 1 && $n % 100 != 11 ? $forms[0] : ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20) ? $forms[1] : $forms[2]);
    }
    /*
     * Функция преобразовывает русские буквы в транслит
     * для url`ов
     */
    public static function slugify($text) {
        $tr = array(
            "А" => "a", "Б" => "b", "В" => "v", "Г" => "g",
            "Д" => "d", "Е" => "e", "Ж" => "j", "З" => "z", "И" => "i",
            "Й" => "y", "К" => "k", "Л" => "l", "М" => "m", "Н" => "n",
            "О" => "o", "П" => "p", "Р" => "r", "С" => "s", "Т" => "t",
            "У" => "u", "Ф" => "f", "Х" => "h", "Ц" => "ts", "Ч" => "ch",
            "Ш" => "sh", "Щ" => "sch", "Ъ" => "", "Ы" => "yi", "Ь" => "",
            "Э" => "e", "Ю" => "yu", "Я" => "ya", "а" => "a", "б" => "b",
            "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "j",
            "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
            "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "y",
            "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
            " " => "_", "." => "", "/" => "_"
        );
        if (preg_match('/[^A-Za-z0-9_\-]/', $text)) {
            $text = strtr($text, $tr);
            $text = preg_replace('/[^A-Za-z0-9_\-]/', '', $text);
        }
        return $text;
    }
}

?>
