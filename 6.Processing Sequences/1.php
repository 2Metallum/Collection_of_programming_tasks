<?php

/*
 * 6.1. Даны десять чисел. Вывести их среднее
        арифметическое
*/

function foo($arrOfNums) {
    $sum = 0;
    foreach ($arrOfNums AS $k) {
        $sum += $k;
    }

    echo $sum . PHP_EOL;
}

foo([1, 2, 3, 4, 5, 6, 7, 8]);