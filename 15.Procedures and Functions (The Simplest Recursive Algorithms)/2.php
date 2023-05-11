<?php

/*
 * 15.2. Описать рекурсивную функцию PowerN(x,n)
        вещественного типа, находящую значение n-й степени
        числа x по формуле: x0 = 1, xn = x·xn–1 при n > 0, xn
        = 1 / x–n при n < 0 (x >= 0 — вещественное число, n
        — целое). С помощью этой функции найти значения
        XN при 5 различных значениях N для данного X.
*/

function PowerN($x, $n) {
    if( $n > 0) {
        return PowerNPositive($x, $n);
    } else {
        return 1 / PowerNNegative($x, $n);
    }
}

function PowerNPositive($x, $n) {
    if($n == 0) return 1;

    return $x * PowerNPositive($x, $n - 1);
}

function PowerNNegative($x, $n) {
    if($n == 0) return 1;

    return $x * PowerNNegative($x, $n + 1);
}

echo PowerN(2, -3);