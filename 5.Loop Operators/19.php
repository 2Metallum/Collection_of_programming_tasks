<?php

/*
 * 5.19. Дано целое число N > 2 и две вещественные точки на
        числовой оси: A, B (A < B). Отрезок [A, B] разбит на
        равные отрезки длины H с концами в N точках вида A,
        A + H, A + 2H, A + 3H, ..., B. Вывести значение H и
        набор из N точек, образующий разбиение отрезка [A,
        B].
*/

function foo($n, $a, $b) {
    $h = ($b - $a) / $n;
    echo "H: $h" . PHP_EOL;
    while($a <= $b) {
        echo "$a, ";
        $a += $h;
    }
}

foo(5, 10, 39);