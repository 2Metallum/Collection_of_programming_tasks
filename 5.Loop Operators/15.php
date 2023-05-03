<?php

/*
 * 5.15. Дано вещественное число X и целое число N > 0.
        Вывести X – X3/3! + X5/5! – ... + (–1)NX2N+1/(2N+1)!
        (N! = 1·2·...·N). Полученное число является
        приближенным значением функции sin в точке X.
*/

function foo($x, $n) {
    $result = $x;
    $factorial = 1;
    $sign = 1;

    for ($i = 3; $i <= $n; $i += 2) {
        $plusMinus = pow(-1, $sign++);
        $factorial *= $i * ($i-1);
        $result += $plusMinus * ($x*$i / $factorial);
    }

    echo $result . PHP_EOL;
}

foo(2, 5);