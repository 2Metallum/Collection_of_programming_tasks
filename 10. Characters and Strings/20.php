<?php

/*
 * 10.20. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Определить
        количество слов в строке.
*/

function foo($string) {
    $chars = str_split($string);
    $countSpaces = 0;

    foreach ($chars as $k) {
        if ($k === " ") {
            $countSpaces++;
        }
    }

    echo "Количество русских слов: " . ($countSpaces+1) . PHP_EOL;
}

foo('Раз два три четыре пять');