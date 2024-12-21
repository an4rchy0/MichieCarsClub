<?php

namespace App\Helpers;

class StringHelper {
    public static function limitWords($string, $wordLimit) {
        $words = explode(' ', $string);
        return implode(' ', array_slice($words, 0, $wordLimit));
    }
}
?>