<?php

/*
 * 4.6. Единицы длины пронумерованы следующим образом:
        1 — дециметр, 2 — километр, 3 — метр, 4 —
        миллиметр, 5 — сантиметр. Дан номер единицы длины
        16
        и длина отрезка L в этих единицах (вещественное
        число). Вывести длину данного отрезка в метрах.
*/

function foo($operation, $length) {
    switch ($operation):
        case 1:
            echo floor($length / 10) . ' метров';
            break;
        case 2:
            echo floor($length * 1000) . ' метров';
            break;
        case 3:
            echo $length . ' метров';
            break;
        case 4:
            echo floor($length / 1000) . ' метров';
            break;
        case 5:
            echo floor($length / 100) . ' метров';
            break;
        default:
            echo 'Incorrect operation';
    endswitch;
}

foo(1, 100);
foo(2, 100);
foo(3, 100);
foo(4, 100);
foo(5, 100);