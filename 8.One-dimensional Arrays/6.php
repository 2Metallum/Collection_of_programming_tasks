<?php

/*
 * 8.6. Поменять местами минимальный и максимальный
        элементы массива размера 10.
*/

function foo($arrOfNums) {
    $min_value = min($arrOfNums);
    $max_value = max($arrOfNums);
    $min_index = array_search($min_value, $arrOfNums);
    $max_index = array_search($max_value, $arrOfNums);

    $tmp = $min_index;
    $min_index = $max_index;
    $max_index = $tmp;

    $arrOfNums[$min_index] = $min_value;
    $arrOfNums[$max_index] = $max_value;
    print_r($arrOfNums);
}

foo([1, 2, 3, 4, 5, 6, 7, 8, 9]);