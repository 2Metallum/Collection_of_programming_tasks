<?php

/*
 * 13.6. Описать функцию PosK(subS,S,k) целого типа,
        возвращающую mnlep позиции, с которой в строке S
        содержится k-е вхождение подстроки subS (k > 0).
        Если количество вхождений subS в строке S меньше k,
        то функция возвращает 0. Вывести значения этой
        функции для пяти данных троек: k, subS и S
*/

function PosK($subS, $S, $k) {
    $count = 0;
    $pos = strpos($S, $subS);
    while($pos !== false) {
        $count++;
        if ($k == $count) {
            return $count;
        }
        $pos = strpos($S, $subS, $pos+1);
    }

    return $count;
}

$str = ' abc abc abc abc abca abc';
echo PosK('abc', $str, 4);