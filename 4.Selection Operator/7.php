<?php

/*
 * 4.7. Единицы массы пронумерованы следующим образом:
        1 — килограмм, 2 — миллиграмм, 3 — грамм, 4 —
        тонна, 5 — центнер. Дан номер единицы массы и
        масса тела M в этих единицах (вещественное число).
        Вывести массу данного тела в килограммах.
*/

function foo($massUnit, $mass)
{
    switch ($massUnit):
        case 1:
            echo $mass;
            break;
        case 2:
            echo floor($mass / 1000000);
            break;
        case 3:
            echo floor($mass / 1000);
            break;
        case 4:
            echo floor($mass * 1000);
            break;
        case 5:
            echo floor($mass * 100);
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