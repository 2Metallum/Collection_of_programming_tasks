<?php

/*
 * 11.8. Описать нерекурсивную функцию NOD2(A,B) целого
        типа, находящую наибольший общий делитель (НОД)
        двух натуральных чисел A и B, используя алгоритм
        Евклида: НОД(A,B) = НОД(B mod A,A), если A <> 0;
        НОД(0,B) = B. С помощью этой функции найти
        наибольшие общие делители пар A и B, A и C, A и D,
        если даны числа A, B, C, D.
*/

function NOD2($A, $B) {
    while($A != 0) {
        $tmp = $A;
        $A = $B % $A;
        $B = $tmp;
    }

    return $B;
}

echo NOD2(9, 33);