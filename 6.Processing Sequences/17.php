<?php

/*
 * 6.17. Даны целые числа K, N и набор из N вещественных
        чисел: A1, A2, ..., AN. Вывести K-e степени чисел из
        данного набора: A1K, A2K, ..., ANK.
*/

function foo($k, $arrOfNums) {
    foreach ($arrOfNums as $key) {
        $arrOfNums[$key] = $key**$k;
    }

    print_r($arrOfNums);
}

foo(3, [1 => 1, 2, 3, 4, 5]);