<?php

/*
 * 10.12. Даны два числа: N1 и N2, и две строки: S1 и S2.
        Получить из этих строк новую строку, объединив N1
        первых символов строки S1 и N2 последних символов
        строки S2.
*/

function foo($n1, $n2, $s1, $s2) {
    $string1 = str_split($s1);
    $string2 = str_split($s2);
    $length = strlen($s2) - $n2;
    $string1 = array_slice($string1, 0, $n1);
    $string2 = array_slice($string2, $length);

    foreach ($string1 as $k) {
        echo $k;
    }
    foreach ($string2 as $k) {
        echo $k;
    }
}

foo(3, 5, 'abcdef', 'Ryan Collins');