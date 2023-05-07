<?php

/*
 * 11.13. Используя функции Otr и Area из предыдущих
        заданий, описать процедуру Dist(Px,Py,Ax,Ay,Bx,By,D),
        находящую расстояние D от точки P до прямой AB по
        формуле D = 2SPAB / |AB|, где SPAB — площадь
        треугольника PAB. С помощью этой процедуры найти
        расстояния от точки P до прямых AB, AC, BC, если
        даны координаты точек P, A, B, C.
*/

function Dist($Px, $Py, $Ax, $Ay, $Bx, $By, &$D) {
    $SPAB = Area($Px, $Py, $Ax, $Ay, $Bx, $By);
    $PAB = Otr($Px, $Py, $Ax, $Ay) + Otr($Ax, $Ay, $Bx, $By);
    $D = 2 * $SPAB / $PAB;
}

$Px = 1;
$Py = 2;
$Ax = 3;
$Ay = 4;
$Bx = 5;
$By = 6;
$Cx = 7;
$Cy = 8;

Dist($Px, $Py, $Ax, $Ay, $Bx, $By, $D_AB);
Dist($Px, $Py, $Ax, $Ay, $Cx, $Cy, $D_AC);
Dist($Px, $Py, $Bx, $By, $Cx, $Cy, $D_BC);

echo "Расстояние от точки P до прямой AB: " . $D_AB . "<br>";
echo "Расстояние от точки P до прямой AC: " . $D_AC . "<br>";
echo "Расстояние от точки P до прямой BC: " . $D_BC . "<br>";