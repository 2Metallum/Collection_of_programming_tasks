<?php

/*
 * 6.10. Дано целое число K и набор ненулевых целых чисел;
        признак его завершения — число 0. Вывести номер
        последнего числа в наборе, меньшего K. Если таких
        чисел в наборе нет, то вывести 0.
*/

function foo($k, $arrOfNums) {
    $lessThanK = 0;
    foreach ($arrOfNums as $key) {
        if($key < $k) {
            $lessThanK = array_search($key, $arrOfNums) + 1;
        }
    }
    echo $lessThanK;
}

foo(6, [1, 2, 3, 4, 6, 7, 8, 9]);