<?php

/*
 * 12.12. Описать процедуру Transp(A,M), выполняющую
        транспонирование квадратной вещественной матрицы
        A порядка M. Двумерный массив A — входной и
        выходной параметр, M — входной параметр.
        Использовать эту процедуру для транспонирования
        данной матрицы A порядка M.
*/

function Transp(&$A, $M) {
    for($i = 0; $i < $M; $i++) {
        for($j = $i; $j < $M; $j++) {
            $tmp = $A[$i][$j];
            $A[$i][$j] = $A[$j][$i];
            $A[$j][$i] = $tmp;
        }
    }
}

$matrix = [
    [3, 1, 2],
    [6, 7, 1],
    [0, 8, 4],
];
Transp($matrix, count($matrix));
print_r($matrix);