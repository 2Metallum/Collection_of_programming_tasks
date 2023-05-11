<?php

/*
 * 15.6. Описать рекурсивную функцию Digits(S) целого типа,
        находящую количество цифр в строке S без
        использования оператора цикла. С помощью этой
        функции найти количество цифр в данных пяти
        строках.
*/

function Digits($S) {
    if ($S == "") {
        return 0;
    } else {
        return is_numeric(substr($S, 0, 1)) + Digits(substr($S, 1));
    }
}

$S1 = "Hello, world!";
$S2 = "12345";
$S3 = "abc123def";
$S4 = "1 2 3 4 5";
$S5 = "";

echo "Digits($S1) = " . Digits($S1) . "\n";
echo "Digits($S2) = " . Digits($S2) . "\n";
echo "Digits($S3) = " . Digits($S3) . "\n";
echo "Digits($S4) = " . Digits($S4) . "\n";
echo "Digits($S5) = " . Digits($S5) . "\n";
