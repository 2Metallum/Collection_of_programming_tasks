<?php

/*
 *11.1. Описать функцию Min2(A,B) вещественного типа,
        находящую минимальное из двух вещественных чисел
        A и B. С помощью этой функции найти минимальные
        из пар чисел A и B, A и C, A и D, если даны числа A, B,
        C, D.
*/

function min2($a, $b) {
    if ($a < $b) {
        return $a;
    } else {
        return $b;
    }
}

$a = 12;
$b = 8;
$c = -1;
$d = 2**2;

echo min2($a, $b);
echo min2($a, $c);
echo min2($a, $d);