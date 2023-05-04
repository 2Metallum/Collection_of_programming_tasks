<?php

/*
 * 9.17. Дана квадратная матрица порядка M. Повернуть ее на
        90 градусов в положительном направлении.
*/

function foo($matrix) {
    $newMatrix = [];
    $column = 0;

    for ($i = 0; $i < count($matrix[0]); $i++) {
        for ($j = count($matrix) - 1; $j >= 0; $j--) {
            $newMatrix[$i][$column++] = $matrix[$j][$i];
        }
        $column = 0;
    }

    print_r($newMatrix);
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);