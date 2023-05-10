<?php

/*
 * 13.5. Описать функцию PosLast(subS,S) целого типа,
        возвращающую номер позиции, с которой в строке S
        содержится последнее вхождение подстроки subS.
        Если в строке S отсутствуют подстроки subS, то
        функция возвращает 0. Вывести значения этой
        функции для пяти данных пар subS и S
*/

function PosLast($subS, $S) {
    $result = strrpos($S, $subS);
    return $result;
}

$str = ' abc abc abc abc abca abc';
$subStr = 'abc';
echo PosLast($subStr, $str);