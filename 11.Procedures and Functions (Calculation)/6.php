<?php

/*
 * 11.6. Описать нерекурсивную функцию Fib(N) целого типа,
        вычисляющую N-е число Фибоначчи F(N) по формуле:
        F(1) = F(2) = 1, F(k) = F(k–2) + F(k–1), k = 3, 4, ... . С
        помощью этой функции вычислить 10 чисел
        Фибоначчи с указанными номерами.
*/

function Fib($N) {
    $a = 1;
    $b = 1;
    for($i = 3; $i <= $N; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }

    return $b;
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $n) {
    echo "Число Фибоначчи с номером $n равно " . Fib($n) . "\n";
}