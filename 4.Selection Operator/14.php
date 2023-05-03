<?php

/*
 * 4.14. Даны два целых числа: D (день) и M (месяц),
        определяющие правильную дату невисокосного года.
        Ввести значения D и M для даты, следующей за
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
    $currentDay = $d;
    while($monthIndex <= 12) {
        echo "$monthIndex:\n";
        for ($i = $currentDay; $i <= $months[$monthIndex]; $i++) {
            echo "$i, ";
        }
        echo "\n";
        $currentDay = 1;
        $monthIndex++;
    }
}

foo(21, 5);