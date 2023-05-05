<?php

/*
 * 10.29. Дана строка-предложение на русском языке. Вывести
        самое короткое слово в предложении (если таких слов
        несколько, то вывести первое из них)
*/

function foo($string) {
    $words = explode(" ", $string);
    $minLength = PHP_INT_MAX;
    $maxWord = '';

    foreach ($words as $word) {
        if (strlen($word) < $minLength) {
            $minLength = strlen($word);
            $maxWord = $word;
        }
    }

    echo "Самое длинное слово : " . $maxWord . " его длинна = " . $minLength . PHP_EOL;
}

foo('afhasdjf ldfsaf lksdafauifodsf');