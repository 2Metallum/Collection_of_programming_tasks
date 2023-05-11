<?php

/*
 * 15.3. Описать рекурсивную функцию SqrtK(x,k,n)
        вещественного типа, находящую приближенное
        значение корня k-й степени из числа x по формуле:
        y(0) = 1, y(n+1) = y(n) – (y(n) – x / y(n)k–1) / k, где
        y(n) обозначает SqrtK(x,k,n) (x — вещественный
        параметр, k и n — целые; x > 0, k > 1, n > 0). С
        помощью этой функции найти приближенные
        значения корня K-й степени из X при 6 различных
        значениях N для данных X и K.
*/

function SqrtK($x, $k, $n, $y = 1) {
    if($n == 0) return y;
    else
        $y_next = y - (y - x / y**(k-1)) / k;
        return SqrtK(x, k, n-1, $y_next);
}