<?php

/*
 * 8.8. Дан массив размера 10. Переставить в обратном
        порядке элементы массива, расположенные между его
        минимальным и максимальным элементами.
*/

function foo($arrOfNums) {
    $max_value = max($arrOfNums);
    $min_value = min($arrOfNums);
    $min_index = array_search($min_value, $arrOfNums);
    $max_index = array_search($max_value, $arrOfNums) - $min_index;

    $subArray = array_slice($arrOfNums, $min_index + 1, $max_index);
    $subArrayReverse = array_reverse($subArray);
    $subArrReverseIndex = [];
    $i = $min_index + 1;
    foreach ($subArrayReverse as $key => $value) {
        $subArrReverseIndex[$i] = $value;
        $i++;
    }
    $arrOfNums = array_replace($arrOfNums, $subArrReverseIndex);
    print_r($arrOfNums) . PHP_EOL;
}

foo([3,2, 1, 4, 5, 6, 7, 8, 9]);