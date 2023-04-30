<?php

/*
 * 2.8. Проверить истинность высказывания: "Среди трех
        данных целых чисел есть хотя бы одна пара взаимно
        противоположных".
*/

function isContrasted($num1, $num2, $num3) {
    $isFirstPair = $num1 == $num2;
    $isSecondPair = $num2 == $num3;
    $isThirdPair = $num3 == $num1;

    if(!$isFirstPair) {
        $isContrasted = abs($num1) == abs($num2) ? 'True' : 'False';
        echo $isContrasted;
    } elseif (!$isSecondPair) {
        $isContrasted = abs($num2) == abs($num3) ? 'True' : 'False';
        echo $isContrasted;
    } elseif (!$isThirdPair) {
        $isContrasted = abs($num3) == abs($num1) ? 'True' : 'False';
        echo $isContrasted;
    } else {
        echo 'False';
    }
}