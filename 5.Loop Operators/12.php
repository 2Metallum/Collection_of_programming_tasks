<?php

/*
 * 5.12. Дано целое число N > 0. Если N — нечетное, то
        вывести произведение 1·3·...·N; если N — четное, то
        вывести произведение 2·4·...·N. Чтобы избежать
        целочисленного переполнения, вычислять это
        произведение с помощью вещественной переменной и
        выводить его как вещественное число.
*/

function foo($n) {
    $sum = 1.0;
    if($n % 2 == 0) {
        for ($i = 2; $i <= $n; $i += 2) {
            $sum *= floatval($i);
        }
    } else {
        for ($i = 1; $i <= $n; $i += 2) {
            $sum *= floatval($i);
        }
    }
    echo $sum . PHP_EOL;
}

foo(32);
foo(33);