<?php

/*
 * 7.8. Дан набор из десяти целочисленных элементов. Найти
        количество элементов, расположенных перед
        минимальным и после максимального.
*/

function foo($arrOfNums) {
    $min_index = PHP_INT_MAX;
    $max_index = PHP_INT_MIN;
    foreach ($arrOfNums as $key) {
        if($key < $min_index) {
            $min_index = $key;
        }
        if($key > $max_index) {
            $max_index = $key;
        }
    }
    echo "Count elements before Min: " . array_search($min_index, $arrOfNums) . PHP_EOL;
    echo "Count elements after Max: " . (count($arrOfNums) - array_search($max_index, $arrOfNums) - 1) . PHP_EOL;
}

foo([4, 3, 2, 1, 5, 6, 7, 6, 5, 4]);