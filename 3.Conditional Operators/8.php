<?php

/*
 * 3.8. Даны две переменные целого типа: A и B. Если их
        значения не равны, то присвоить каждой переменной
        сумму этих значений, а если равны, то присвоить
        переменным нулевые значения
*/

function foo($a, $b) {
    if ($a != $b) {
        $tmp = $a + $b;
        $a = $tmp;
        $b = $tmp;
    } else {
        $a = 0;
        $b = 0;
    }
    echo "\nA: " . $a . "\nB: " . $b;
}

foo(3, 4);
foo(7, 7);