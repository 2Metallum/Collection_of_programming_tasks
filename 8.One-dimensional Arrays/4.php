<?php

/*
 * 8.4. Дан целочисленный массив размера N. Преобразовать
        его, прибавив к четным числам последний элемент.
        Последний элемент массива не изменять.
*/

function foo($arrOfNums) {
    for($i = 0; $i < $arrOfNums; $i++) {
        if($i + 1 == count($arrOfNums)) break;
        if($arrOfNums[$i] % 2 == 0) {
            $arrOfNums[$i] += $arrOfNums[count($arrOfNums) - 1];
        }
    }

    print_r($arrOfNums);
}

foo([1, 2, 3, 4, 5, 6, 7, 8, 9]);