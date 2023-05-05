<?php

/*
 * 10.23. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Определить
        длину самого длинного слова.
*/

function foo($string) {
    $words = explode(" ", $string);
    $maxLength = PHP_INT_MIN;
    $maxWord = '';

    foreach ($words as $word) {
        if (strlen($word) > $maxLength) {
            $maxLength = strlen($word);
            $maxWord = $word;
        }
    }

    echo "Самое длинное слово : " . $maxWord . " его длинна = " . $maxLength . PHP_EOL;
}

foo('afhasdjf ldfsaf lksdafauifodsf');