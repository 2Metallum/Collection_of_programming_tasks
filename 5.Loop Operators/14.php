<?php

/*
 * 5.14. Дано вещественное число X и целое число N > 0.
        Вывести 1 + X + X2/2! + ... + XN/N! (N! = 1·2·...·N).
        Полученное число является приближенным значением
        функции exp в точке X.
*/

function foo($x, $n) {
    $sum = 1;
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
        $sum += $x*$i/ $factorial;
    }
    echo $sum . PHP_EOL;
}

foo(2, 4);