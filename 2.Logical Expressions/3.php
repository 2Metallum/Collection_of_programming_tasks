<?php

/*
 * 2.3. Проверить истинность высказывания: "Данные числа
        x, y являются координатами точки, лежащей в первой
        или третьей координатной четверти".
*/

function isOddQuarter($x, $y) {
    if ($x > 0 && $y > 0) {
        echo 'True';
    } elseif ($x < 0 && $y < 0) {
        echo 'True';
    } else {
        echo 'False';
    }
}