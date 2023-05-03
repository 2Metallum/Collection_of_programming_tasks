<?php

/*
 * 5.17. Дано вещественное число X (|X| < 1) и целое число N
        > 0. Вывести X – X2/2 + X3/3 – ... + (–1)N–1XN/N.
        Полученное число является приближенным значением
        функции ln в точке 1+X.
*/

function foo($x, $n) {
    $result = $x;
    $sign = 1;
    for($i = 2; $i <= $n; $i++) {
        $plusMinus = pow(-1, $sign++);
        $result += $plusMinus * ($x ** $i / $i);
    }

    echo $result . PHP_EOL;
}

foo(0.9,4);