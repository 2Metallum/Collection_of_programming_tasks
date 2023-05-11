<?php

/*
 * 15.1. Описать рекурсивные функции Fact(N) и Fact2(N)
        вещественного типа, вычисляющие значения
        факториала N! и двойного факториала N!!
        соответственно (N > 0 — параметр целого типа). С
        помощью этих функций вычислить факториалы и
        двойные факториалы пяти данных чисел.
*/

function Fact($N) {
    if($N == 1) return 1;

    return $N * Fact($N - 1);
}

function Fact2($N) {
    if($N == 1 || $N == 0) {
        return 1;
    }

    return $N * Fact2($N - 2);
}

echo Fact(3) . PHP_EOL;
echo Fact(5) . PHP_EOL;
echo Fact2(6) . PHP_EOL;
echo Fact2(5) . PHP_EOL;