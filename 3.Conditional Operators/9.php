<?php

/*
 * 3.9. Даны две переменные целого типа: A и B. Если их
        значения не равны, то присвоить каждой переменной
        максимальное из этих значений, а если равны, то
        присвоить переменным нулевые значения.
*/

function foo($a, $b) {
    if ($a != $b) {
        $max = $a > $b ? $a : $b;
        $a = $max;
        $b = $max;
    } else {
        $a = 0;
        $b = 0;
    }

    echo "\nA: " . $a . "\nB: " . $b;
}

foo(3, 4);
foo(7, 7);