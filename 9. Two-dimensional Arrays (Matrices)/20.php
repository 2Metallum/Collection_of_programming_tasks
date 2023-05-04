<?php

/*
 * 9.20. Даны два числа k1 и k2 и матрица размера 4x10.
        Поменять местами строки матрицы с номерами k1 и k2.
*/

function foo($k1, $k2, $matrix) {
    $arrOfArgs = array($k1, $k2);
    $replaceRows = [];
    for ($i = 0; $i < count($arrOfArgs); $i++) {
        for ($j = 0; $j < count($matrix[0]); $j++) {
            $replaceRows[$arrOfArgs[$i]][$j] = $matrix[$arrOfArgs[$i]][$j];
        }
    }
    $length = count($arrOfArgs) - 1;
    for ($i = 0; $i < count($arrOfArgs); $i++) {
        for ($j = 0; $j < count($matrix[0]); $j++) {
            $matrix[$arrOfArgs[$length]][$j] = $replaceRows[$arrOfArgs[$i]][$j];
        }
        $length--;
    }

    print_r($matrix);
}

foo(0, 3, [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13]]);