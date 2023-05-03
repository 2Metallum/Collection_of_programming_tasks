<?php

/*
 * 6.2. Дано целое число N и набор из N вещественных
        чисел. Вывести сумму и произведение чисел из
        данного набора.
*/

function foo($arrOfNums) {
    $sum = 0;
    $multi = 1;
    foreach ($arrOfNums AS $k) {
        $sum += $k;
        $multi *= $k;
    }
    echo "Multi: $multi" . PHP_EOL;
    echo "Sum: $sum" . PHP_EOL;
}

foo([1.2, 1.9, 2.5, 10.5]);