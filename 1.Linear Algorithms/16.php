<?php

/*
 * 1.16. Даны координаты трех вершин треугольника (x1, y1),
        (x2, y2), (x3, y3). Найти его периметр и площадь.
*/

function triangle($x1, $y1, $x2, $y2, $x3, $y3) {
    $AB = sqrt(($x2 - $x1)**2 + ($y2 - $y1)**2);
    $BC = sqrt(($x3 - $x2)**2 + ($y3 - $y2)**2);
    $AC = sqrt(($x3 - $x1)**2 + ($y3 - $y1)**2);
    $p = ($AB + $BC + $AC) / 2;
    $S = sqrt($p * ($p - $AB) * ($p - $BC) * ($p - $AC));
    $P = $AB + $BC + $AC;

    echo "Perimeter = " . $P . "<br>";
    echo "Square = " . $S . "<br>";
}

$x1 = 0;
$y1 = 0;
$x2 = 3;
$y2 = 0;
$x3 = 0;
$y3 = 4;
triangle($x1, $y1, $x2, $y2, $x3, $y3);