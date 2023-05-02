<?php

/*
 * 7.2. Найти номера минимального и максимального из
        данных десяти элементов.
*/

function findMinMax($arrOfNums) {
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    foreach ($arrOfNums as $key) {
        if($key > $max) {
            $max = array_search($key, $arrOfNums);
        }
        if($key < $min) {
            $min = array_search($key, $arrOfNums);
        }
    }

    echo "Min: " . $min . PHP_EOL;
    echo "Max: " . $max . PHP_EOL;
}

findMinMax([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);