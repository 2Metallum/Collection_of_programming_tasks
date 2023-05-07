<?php

/*
 * 12.6. Описать процедуру MoveRight(A,N,k),
        осуществляющую циклический сдвиг элементов
        вещественного массива A размера N на k позиций
        вправо (0 < k < 5, k < N). Массив A — входной и
        выходной параметр, N и k — входные параметры. С
        помощью этой процедуры осуществить сдвиг
        элементов данного массива размера N на k1 позиций,
        а затем — сдвиг элементов полученного массива на k2
        позиций (k1 и k2 даны). После каждого вызова
        процедуры выводить на экран результирующий
        массив.
*/

function MoveRight(&$A, $N, $k) {
    // Сдвигаем элементы на k позиций вправо
    for ($i = 0; $i < $k; $i++) {
        $temp = $A[$N - 1];
        for ($j = $N - 1; $j > 0; $j--) {
            $A[$j] = $A[$j - 1];
        }
        $A[0] = $temp;
    }
}

$N = 6;
$k1 = 2;
$k2 = 3;
$A = [1, 2, 3, 4, 5, 6];

// Сдвигаем элементы на k1 позиций вправо
MoveRight($A, $N, $k1);
print_r($A); // [5, 6, 1, 2, 3, 4]

// Сдвигаем элементы на k2 позиций вправо
MoveRight($A, $N, $k2);
print_r($A); // [3, 4, 5, 6, 1, 2]
