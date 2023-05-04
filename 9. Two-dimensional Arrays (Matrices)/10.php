<?php

/*
 * 9.10. Дана квадратная матрица порядка M. Найти сумму
        элементов ее главной диагонали.
*/

function additionDiagonalEl($matrix) {
    $diagonalSumEl = 0;
    $index = 0;

    while($index < count($matrix)) {
        $diagonalSumEl += $matrix[$index][$index];
        $index++;
    }

    echo "Сумма элементов по главной диагонали: " . $diagonalSumEl . PHP_EOL;
}

additionDiagonalEl([[1, 2, 3, 4],
                    [2, 3, 4, 5],
                    [3, 4, 5, 6],
                    [4, 5, 6, 7]]);