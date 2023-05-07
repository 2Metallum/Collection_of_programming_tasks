<?php

/*
 * 11.11. Используя функцию Otr из предыдущего задания,
        описать функцию Perim(Ax,Ay,Bx,By,Cx,Cy)
        вещественного типа, находящую периметр
        треугольника ABC по координатам его вершин (Ax, Ay,
        Bx, By, Cx, Cy — вещественные параметры). С
        помощью этой функции найти периметры
        треугольников ABC, ABD, ACD, если даны координаты
        точек A, B, C, D.
*/

function Perim($Ax, $Ay, $Bx, $By, $Cx, $Cy) {
    $AB = sqrt(($Ax - $Bx)**2 + ($Ay-$By)**2);
    $BC = sqrt(($Bx - $Cx)**2 + ($By-$Cy)**2);
    $AC = sqrt(($Cx - $Ax)**2 + ($Cy-$Ay)**2);

    return $AB + $BC + $AC;
}

$Ax = 1;
$Ay = 2;
$Bx = 3;
$By = 4;
$Cx = 5;
$Cy = 6;
$Dx = 7;
$Dy = 8;

$perim_ABC = Perim($Ax, $Ay, $Bx, $By, $Cx, $Cy);
$perim_ABD = Perim($Ax, $Ay, $Bx, $By, $Dx, $Dy);
$perim_ACD = Perim($Ax, $Ay, $Cx, $Cy, $Dx, $Dy);

echo $perim_ABC . PHP_EOL;
echo $perim_ABD . PHP_EOL;
echo $perim_ACD . PHP_EOL;