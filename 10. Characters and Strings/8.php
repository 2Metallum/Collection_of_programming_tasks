<?php

/*
 * 10.8. Дана строка S, изображающая вещественное число в
        формате с плавающей точкой, и целое число N > 0.
        Вывести набор символов, изображающих первые N
        цифр дробной части этого вещественного числа (без
        округления).
*/

function foo($string, $n) {
    $float = floatval($string);
    echo round($float, $n);
}

foo('123.1254363', 5, PHP_ROUND_HALF_DOWN);