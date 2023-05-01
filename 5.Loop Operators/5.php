<?php

/*
 * 5.5. Дано вещественное число A и целое число N > 0.
        Вывести 1 + A + A2 + A3 + ... + AN.
*/

function foo($a, $n) {
    echo "Формула: 1 + A + A2 + A3 + ... + AN\n";
    echo 'Параметры: $a = ' . $a . ', $n = ' . $n;
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result += $a * $i;
    }
    echo "\n$result";
}

foo(5, 10);