<?php

/*
 * 3.14. На числовой оси расположены три точки: A, B, C.
        Определить, какая из двух последних точек (B или C)
        расположена ближе к A, и вывести эту точку и ее
        расстояние от точки A.
*/

function foo($a, $b, $c) {
    $point = abs($b) - abs($a) > abs($c) - abs($a) ? $c : $b;
    echo abs($point - $a);
}

foo(1 ,123, 9);
foo( -5, -12, 3);