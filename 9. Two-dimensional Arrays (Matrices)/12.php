<?php

/*
 * 9.12. Дана квадратная матрица порядка M. Найти суммы
        элементов ее диагоналей, параллельных главной
        (начиная с одноэлементной диагонали
        A[1,M]1|A[1,1]2).
*/

function foo($matrix) {
    $sumMatrixEl = 0;
    $diagonalSumEl = 0;
    $index = 0;

    while($index < count($matrix)) {
        $diagonalSumEl += $matrix[$index][$index];
        $index++;
    }

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            $sumMatrixEl += $matrix[$i][$j];
        }
    }

    echo "Сумма всех диагоналей параллельных главной, кроме неё: " . ($sumMatrixEl - $diagonalSumEl) . PHP_EOL;
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);