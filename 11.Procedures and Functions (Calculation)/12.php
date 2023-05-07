<?php

/*
 * 11.12. Используя функции Otr и Perim из предыдущих
        заданий, описать функцию Area(Ax,Ay,Bx,By,Cx,Cy)
        вещественного типа, находящую площадь
        треугольника ABC по формуле Герона: SABC =
        sqrt(p·(p–|AB|)·(p–|AC|)·(p–|BC|)), где p —
        полупериметр. С помощью этой функции найти
        площади треугольников ABC, ABD, ACD, если даны
        координаты точек A, B, C, D.
*/

function Area($Ax, $Ay, $Bx, $By, $Cx, $Cy) {
    $AB = sqrt(($Ax - $Bx)**2 + ($Ay-$By)**2);
    $BC = sqrt(($Bx - $Cx)**2 + ($By-$Cy)**2);
    $AC = sqrt(($Cx - $Ax)**2 + ($Cy-$Ay)**2);

    $p = ($AB + $BC + $AC) / 2;

    return sqrt($p * ($p - $AB)*($p - $AC)*($p - $BC));
}

$Ax = 1;
$Ay = 2;
$Bx = 3;
$By = 4;
$Cx = 5;
$Cy = 6;
$Dx = 7;
$Dy = 8;

$area_ABC = Area($Ax, $Ay, $Bx, $By, $Cx, $Cy);
$area_ABD = Area($Ax, $Ay, $Bx, $By, $Dx, $Dy);
$area_ACD = Area($Ax, $Ay, $Cx, $Cy, $Dx, $Dy);

echo $area_ABC . PHP_EOL;
echo $area_ABD . PHP_EOL;
echo $area_ACD . PHP_EOL;