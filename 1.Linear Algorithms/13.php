<?php

/*
 * 1.13. Найти периметр и площадь равнобедренной трапеции
        с основаниями a и b (a > b) и углом alpha при
        большем основании (угол дан в радианах).
*/

$c = (a - b) / 2;
$P = (a + b) + $c * 2;

$h = $c * tan(alpha);
$S = ((a + b) / 2) * $h;