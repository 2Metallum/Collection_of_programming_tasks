<?php

function Heights($Ax, $Ay, $Bx, $By, $Cx, $Cy, &$hA, &$hB, &$hC) {
    // Вычисляем площадь треугольника ABC
    $areaABC = abs(($Bx - $Ax) * ($Cy - $Ay) - ($Cx - $Ax) * ($By - $Ay)) / 2;

    // Вычисляем длины сторон треугольника ABC
    $AB = Dist($Ax, $Ay, $Bx, $By);
    $BC = Dist($Bx, $By, $Cx, $Cy);
    $CA = Dist($Cx, $Cy, $Ax, $Ay);

    // Вычисляем высоты треугольника ABC
    $hA = 2 * $areaABC / $BC;
    $hB = 2 * $areaABC / $CA;
    $hC = 2 * $areaABC / $AB;
}

// Координаты вершин треугольника ABC
$Ax = 0;
$Ay = 0;
$Bx = 4;
$By = 0;
$Cx = 0;
$Cy = 3;

// Находим высоты треугольника ABC
$hA = $hB = $hC = 0;
Heights($Ax, $Ay, $Bx, $By, $Cx, $Cy, $hA, $hB, $hC);
echo "Высота из вершины A: $hA\n";
echo "Высота из вершины B: $hB\n";
echo "Высота из вершины C: $hC\n";

// Координаты вершин треугольника ABD
$Dx = 4;
$Dy = 3;

// Находим высоты треугольника ABD
$hA = $hB = $hD = 0;
Heights($Ax, $Ay, $Bx, $By, $Dx, $Dy, $hA, $hB, $hD);
echo "Высота из вершины A: $hA\n";
echo "Высота из вершины B: $hB\n";
echo "Высота из вершины D: $hD\n";

// Координаты вершин треугольника ACD
$Cx = 3;
$Cy = 4;

// Находим высоты треугольника ACD
$hA = $hC = $hD = 0;
Heights($Ax, $Ay, $Cx, $Cy, $Dx, $Dy, $hA, $hC, $hD);
echo "Высота из вершины A: $hA\n";
echo "Высота из вершины C: $hC\n";
echo "Высота из вершины D: $hD\n";
