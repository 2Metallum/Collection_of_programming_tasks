<?php

/*
 * 5.1. Даны два целых числа A и B (A < B). Вывести все
        целые числа, расположенные между данными числами
        (включая сами эти числа), в порядке их возрастания,
        а также количество N этих чисел.
*/

function foo($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
        echo "$i, ";
    }
}

foo(2, 21);