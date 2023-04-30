<?php

/*
 * 3.1. Даны три целых числа. Возвести в квадрат
        отрицательные числа и в третью степень —
        положительные (число 0 не изменять).
 * */

function foo($arrOfNums) {
    for ($i = 0; $i < count($arrOfNums); $i++) {
        if ($arrOfNums[$i] > 0) {
            $arrOfNums[$i] = pow($arrOfNums[$i], 3);
        } elseif ($arrOfNums[$i] < 0) {
            $arrOfNums[$i] = pow($arrOfNums[$i], 2);
        } else {
            continue;
        }
    }
    print_r($arrOfNums);

    return $arrOfNums;
}
foo([1, 4, -8]);
foo([0 ,-5, 0]);