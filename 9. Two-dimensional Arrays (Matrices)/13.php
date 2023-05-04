<?php

/*
 * 9.13. Дана квадратная матрица порядка M. Вывести
        минимальные из элементов каждой ее диагонали,
        параллельной побочной (начиная с одноэлементной
        диагонали A[1,M]3|A[1,1]4).
*/

function foo($matrix) {
    $currentColumn = count($matrix[0]) - 1;
    $min = PHP_INT_MAX;

    for ($i = 0; $i < count($matrix); $i++) {
        echo "Диагональ $i, минимальный элемент: ";
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if($j == $currentColumn) {
                continue;
            }
            if($matrix[$i][$j] < $min) {
                $min = $matrix[$i][$j];
            }
        }
        $currentColumn--;
        echo $min . PHP_EOL;
        $min = PHP_INT_MAX;
    }
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);