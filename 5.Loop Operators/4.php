<?php

/*
 * 5.4. Дано вещественное число A и целое число N > 0.
        Вывести все целые степени числа A от 1 до N.
*/

function foo($a, $n) {
    echo "Все целые степени числа: $a";
    for ($i = 1; $i <= $n; $i++) {
        echo "\n$i. " . pow($a, $i);
    }
}

foo(9, 4);