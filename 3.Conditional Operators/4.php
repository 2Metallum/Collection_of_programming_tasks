<?php

/*
 * 3.4. Из трех данных чисел выбрать наименьшее и
        наибольшее.
*/

function searchMinMax($arrOfNums) {
    $min = min($arrOfNums);
    $max = max($arrOfNums);

    echo "\nMin: " . $min . "\n" . "Max: " . $max;
}

searchMinMax([1, 6, 9]);
searchMinMax([2, 2, 7]);
searchMinMax([-9, 100, 0]);