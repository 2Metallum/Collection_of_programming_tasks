<?php

/*
 * 5.16. Дано вещественное число X и целое число N > 0.
        Вывести 1 – X2/2! + X4/4! – ... + (–1)NX2N/(2N)! (N! =
        1·2·...·N). Полученное число является приближенным
        значением функции cos в точке X.
*/

function foo($x, $n) {
    $result = $x;
    $factorial = 1;
    $sign = 1;

    for ($i = 2; $i <= $n; $i += 2) {
        $plusMinus = pow(-1, $sign++);
        $factorial *= $i * ($i-1);
        $result += $plusMinus * ($x*$i / $factorial);
    }

    echo $result . PHP_EOL;
}

foo(2, 5);