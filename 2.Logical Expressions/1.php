<?php

/*
 * 2.1. Проверить истинность высказывания: "Квадратное
        уравнение Ax2 + Bx + C = 0 с данными
        коэффициентами A, B, C имеет вещественные корни"
*/

function quadraticHasRoots($a, $b, $c) {
    $d = pow($b, 2) - 4*$a*$c;
    if ($d > 0) {
        echo "True";
    } elseif ($d == 0) {
        echo "True";
    } else {
        echo "False";
    }
}