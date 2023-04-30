<?php

/*
 * 3.13. Даны вещественные координаты точки, не лежащей
        на координатных осях OX и OY. Вывести номер
        координатной четверти, в которой находится данная
        точка.
*/

function foo($x1, $y1) {
    $quarters = ['I', 'II', 'III', 'IV'];

    if ($x1 > 0 && $y1 > 0) {
        echo $quarters[0];
    } elseif ($x1 < 0 && $y1 > 0) {
        echo $quarters[1];
    } elseif ($x1 < 0 && $y1 < 0) {
        echo $quarters[2];
    } else {
        echo $quarters[3];
    }
}

foo(2, -5);
foo(-3, -10);
foo( 2, 2);