<?php

/*
 * 7.3. Найти номера первого и последнего минимального и
        максимального из данных десяти целочисленных
        элементов.
*/

function findMinMaxTwice($arrOfNums) {
    $min_index = PHP_INT_MAX;
    $max_index = PHP_INT_MIN;
    $last_min_index = PHP_INT_MAX;
    $last_max_index = PHP_INT_MIN;

    foreach ($arrOfNums as $key) {
        if($key < $min_index) {
            $tmp = $min_index;
            $min_index = $key;
            $last_min_index = $tmp;
        }
        if($key > $max_index) {
            $tmp = $max_index;
            $max_index = $key;
            $last_max_index = $tmp;
        }
    }

    echo "Min: " . $min_index . PHP_EOL;
    echo "Max: " . $max_index . PHP_EOL;
    echo "Min: " . $last_min_index . PHP_EOL;
    echo "Max: " . $last_max_index . PHP_EOL;
}

findMinMaxTwice([5, 2, 8, 2, 9, 1, 7, 3, 8, 4]);