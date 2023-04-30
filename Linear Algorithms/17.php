<?php

/*
 * 1.17. Найти корни квадратного уравнения Ax2 + Bx + C = 0,
        заданного своими коэффициентами A, B, C
        (коэффициент A не равен 0), если известно, что
        дискриминант уравнения неотрицателен
*/

function quadratic_equation($a, $b, $c) {
    $d = pow($b, 2) - 4*$a*$c;
    if ($d != 0) {
        $x1 = ( -$b + sqrt($d) ) / ( 2 * $a );
        $x2 = ( -$b - sqrt($d) ) / ( 2 * $a );
        echo "Roots of a square expression: " . $x1 . ", " . $x2;
    } else {
        $x = -$b / ( 2 * $a );
        echo "Roots of a square expression: " . $x;
    }
}

$a = 3;
$b = 12;
$c = 8;
quadratic_equation($a, $b, $c);