<?php

/*
 * 3.2. Из трех данных чисел выбрать наименьшее.
*/

function searchMin($arrOfNums) {
    $min = min($arrOfNums);
    echo $min;
    return $min;
}

searchMin([2, 8, 9]);
searchMin([6, 6, 4]);