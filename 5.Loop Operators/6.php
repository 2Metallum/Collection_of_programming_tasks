<?php

/*
 * 5.6. Дано вещественное число A и целое число N > 0.
        Вывести 1 – A + A2 – A3 + ... + (–1)N·AN.
*/

function foo($a, $n) {
    echo "Формула: 1 – A + A2 – A3 + ... + (–1)N·AN\n";
    echo 'Параметры: $a = ' . $a . ', $n = ' . $n;
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result += pow(-1, $i) * ($a * $i);
    }
    echo "\n$result\n";
}

foo(5, 1);
foo(4, 3);