<?php
/*
 * 12.9. Описать функцию Norm1(A,M,N) вещественного типа,
        вычисляющую норму матрицы A размера M x N с
        вещественными элементами: Norm1(A,M,N) = max
        {|A[1,j]| + |A[2,j]| + ... + |A[M,j]|}, где максимум
        берется по всем j от 1 до N. Для данной матрицы A
        размера M x N найти Norm1(A,k,N), k = 1,...,M.

*/

function Norm1($A, $M, $N) {
    $result = [];
    $sum = 0;
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $M; $j++) {
            $sum += $A[$j][$i];
        }
        $result[] = $sum;
        $sum = 0;
    }

    return max($result);
}

$matrix = [
    [1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7],
    [5, 6, 7, 8],
    [6, 7, 8, 9]
];
Norm1($matrix, 6, 4);