<?php

/*
 * 3.15. Даны четыре целых числа, одно из которых отлично
        от трех других, равных между собой. Вывести
        порядковый номер этого числа.
*/

function foo($num1, $num2, $num3, $num4) {
    if ($num1 == $num2 && $num2 == $num3) {
        echo "4";
    } elseif ($num2 == $num3 && $num3 == $num4) {
        echo "1";
    } elseif ($num1 == $num3 && $num3 == $num4) {
        echo "2";
    } else {
        echo "3";
    }
}

foo(2, 2, 10, 2);
foo(4, 5, 5, 5);