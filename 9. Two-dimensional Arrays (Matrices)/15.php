<?php

/*
 * 9.15. Дана квадратная матрица порядка M. Заменить нулями
        элементы, лежащие одновременно выше главной
        диагонали (включая эту диагональ) и ниже побочной
        диагонали (также включая эту диагональ).
*/

function foo($matrix) {
    $currentColumnMain = 0;
    $currentColumnSub = count($matrix[0]) - 1;

    for($i = 0; $i < count($matrix); $i++) {
        if($i == 0 || $i == count($matrix)-1) {
            for($j = 0; $j < count($matrix[$i]); $j++) {
                $matrix[$i][$j] = 0;
            }
        }
        for($j = 0; $j < count($matrix[$i]); $j++) {

            if($j == $currentColumnSub || $j == $currentColumnMain) {
                $matrix[$i][$j] = 0;
            }
            if($j < $currentColumnMain){
                continue;
            }
            if($j < $currentColumnSub) {
                continue;
            } else {
                $matrix[$i][$j] = 0;
            }
        }
        $currentColumnMain++;
        $currentColumnSub--;
    }

    print_r($matrix);
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);