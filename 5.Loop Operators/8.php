<?php

/*
 * 5.8. Дано целое число N > 1. Вывести наибольшее целое
        K, при котором выполняется неравенство 3K < N, и
        само значение 3K.
*/

function foo($n) {
    $k = 1;
    while($k < $n) {
        if(3*$k >= $n) {
            $k--;
            break;
        }
        $k++;
    }
    echo "k: $k\n";
    echo "3k: " . $k*3 . "\n";
}

foo(4);
foo(11);