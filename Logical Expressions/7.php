<?php

/*
 * 2.7. Проверить истинность высказывания: "Среди трех
        данных целых чисел есть хотя бы одна пара
        совпадающих".
*/

function hasSimilar($num1, $num2, $num3) {
    $isSimilar = ($num1 == $num2) || ($num2 == $num3) || ($num3 == $num1);
    echo $isSimilar;
}