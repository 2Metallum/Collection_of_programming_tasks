<?php

/*
 * 6.8. Дано целое число K и набор ненулевых целых чисел;
        признак его завершения — число 0. Вывести
        количество чисел в наборе, меньших K.
*/

function foo($k, $arrOfNums) {
    $count = 0;
    foreach ($arrOfNums AS $key) {
        if($key < $k) {
            $count++;
        }
    }
    echo $count;
}