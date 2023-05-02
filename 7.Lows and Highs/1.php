<?php

/*
 * 7.1. Найти минимальный и максимальный из данных
        десяти элементов.
*/

function findMinMax($arrOfNums) {
    $min = $arrOfNums[0];
    $max = $arrOfNums[0];
    foreach ($arrOfNums as $key) {
        if($key > $max) {
            $max = $key;
        }
        if($key < $min) {
            $min = $key;
        }
    }

    echo "Min: " . $min . PHP_EOL;
    echo "Max: " . $max . PHP_EOL;
}

findMinMax([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);