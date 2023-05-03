<?php

/*
 * 4.5. Арифметические действия над числами
        пронумерованы следующим образом: 1 — сложение, 2
        — вычитание, 3 — умножение, 4 — деление. Дан
        номер действия и два числа A и B
        (В не равно нулю). Выполнить над числами указанное
        действие и вывести результат.
*/

function foo($operator, $a, $b) {
    switch ($operator):
        case 1:
            echo $a + $b;
            break;
        case 2:
            echo $a - $b;
            break;
        case 3:
            echo $a * $b;
            break;
        case 4:
            echo $a / $b;
            break;
        default:
            echo 'Something wrong';
    endswitch;
}

foo(1, 3, 5);
foo(4, 8, 2);