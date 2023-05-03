<?php

/*
 * 2.18. Даны координаты (как целые от 1 до 8) двух
        различных полей шахматной доски. Если король за
        один ход может перейти с одного поля на другое,
        вывести логическое значение True, в противном
        случае вывести значение False.
*/

function foo($x1, $y1, $x2, $y2) {
    $xCoordinateValid = ($x1 - $x2) >= -1 && ($x1 - $x2) <= 1;
    $yCoordinateValid = ($y1 - $y2) >= -1 && ($y1 - $y2) <= 1;
    if($yCoordinateValid && $xCoordinateValid) {
        echo 'True';
        return true;
    }
    echo 'False';
    return false;
}

foo(1, 3, 2, 4);
foo(4, 5, 3, 6);
foo(3, 3, 6, 2);