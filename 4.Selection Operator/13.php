<?php

/*
 * 4.13. Даны два целых числа: D (день) и M (месяц),
        определяющие правильную дату невисокосного года.
        Вывести значения D и M для даты, предшествующей
        указанной.
*/

function foo($d, $m) {
    $months = [
        1 => 31,
        2 => 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    ];
    $monthIndex = $m;
    $months[$m] = $d;
    while($monthIndex > 0) {
        echo "$monthIndex:\n";
        $dayCount = $months[$monthIndex];
        for ($i = $dayCount; $i > 0; $i--) {
            echo "$i, ";
        }
        echo "\n";
        $monthIndex--;
    }
}

foo(21, 5);