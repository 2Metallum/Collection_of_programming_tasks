<?php

/*
 * 9.11. Дана квадратная матрица порядка M. Найти сумму
        элементов ее побочной диагонали.
*/

function additionSubDiagonalEl($matrix) {
    $currentColumn = count($matrix[0]) - 1;
    $currentRow = 0;
    $sumSubDiagonalEl = 0;

    while($currentRow < count($matrix)) {
        $sumSubDiagonalEl += $matrix[$currentRow++][$currentColumn--];
    }

    echo "Сумма элементов побочной диагонали: " . $sumSubDiagonalEl . PHP_EOL;
}

additionSubDiagonalEl([[1, 2, 3, 4],
                        [2, 3, 4, 5],
                        [3, 4, 5, 6],
                        [4, 5, 6, 7]]);