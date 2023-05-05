<?php

/*
 * 10.17. Даны две строки: S1 и S2. Удалить из строки S1 все
        подстроки, совпадающие с S2. Если таких подстрок
        нет, то вывести S1 без изменений.
*/

function foo($s1, $s2) {
    $pos = strpos($s1, $s2);
    $result = '';
    while ($pos !== false) {
        $s1 = substr_replace($s1, $result, $pos, strlen($s2));
        $pos = strpos($s1, $s2, $pos+1);
    }

    echo $s1 . PHP_EOL;
}

foo('abcdabcdabcde', 'ab');