<?php

/*
 * 13.4. Описать процедуру TrimL(S), удаляющую в строке S
        начальные пробелы. Используя эту процедуру,
        преобразовать пять данных строк.
*/

function TrimL(&$S) {
    $S = ltrim($S, " ");
}

$str = '     Hi, people!     <';
TrimL($str);
echo $str;