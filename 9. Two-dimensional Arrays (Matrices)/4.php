<?php

/*
 * 9.4. Дана матрица размера 5x10. В каждой строке найти
        количество элементов, меньших среднего
        арифметического всех элементов этой строки.
*/

function foo($matrix) {
     $result= [];
     $row = 0;
     for ($i = 0; $i < count($matrix); $i++) {
         $avgRow = 0;
         for($j = 0; $j < count($matrix[$i]); $j++) {
             $avgRow += $matrix[$i][$j];
         }
         $avgRow /= count($matrix[$i]);
         for($j = 0; $j < count($matrix[$i]); $j++) {
             if($matrix[$i][$j] < $avgRow) {
                 if(!isset($result[$row])) {
                     $result[$row] = 1;
                 } else {
                     $result[$row]++;
                 }
             }
         }
         $row++;
     }

     print_r($result);
}

foo([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    [5, 6, 7, 8, 9, 10, 11, 12, 13, 14]]);