<?php

/*
 * 1.2. Даны два числа. Найти среднее арифметическое их
        квадратов и среднее арифметическое их модулей.
*/

$a = 46;
$b = -9;

$arethmeticOfSquares = ($a**2 + $b**2) / 2;
$modulesAverage = (abs($a) + abs($b)) / 2;

echo $arethmeticOfSquares . "<br>";
echo $modulesAverage . "<br>";
