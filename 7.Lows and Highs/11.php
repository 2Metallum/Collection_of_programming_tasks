<?php

/*
 * 7.11. Найти два наибольших из данных десяти элементов.
*/

function findTwoMax($arrOfNums) {
    $first_max_index = PHP_INT_MIN;
    $second_max_index = PHP_INT_MIN;

    foreach ($arrOfNums as $key) {
        if($key > $first_max_index) {
            $tmp = $first_max_index;
            $first_max_index = $key;
            $second_max_index = $tmp;
        }
    }

    echo "First Max Index: " . $first_max_index . PHP_EOL;
    echo "Second Max Index: " . $second_max_index . PHP_EOL;
}

findTwoMax([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);