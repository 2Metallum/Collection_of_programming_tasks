<?php

/*
 * 3.3. Из трех данных чисел выбрать наибольшее.
*/

function searchMax($arrOfNums) {
    $max = max($arrOfNums);
    echo $max;
    return $max;
}

searchMax([2, 8, 9]);
searchMax([6, 6, 4]);