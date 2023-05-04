<?php

/*
 * 9.14. Дана квадратная матрица порядка M. Заменить нулями
        элементы матрицы, лежащие выше побочной
        диагонали.
*/

function foo($matrix) {
    $currentColumn = count($matrix[0]) - 1;

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if($j >= $currentColumn) {
                continue;
            }
            $matrix[$i][$j] = 0;
        }
        $currentColumn--;
    }

    print_r($matrix);
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);