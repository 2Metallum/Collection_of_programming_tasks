<?php

/*
 * 18.4. Дано число k и файл, содержащий ненулевые целые
        числа. Вывести элемент файла с номером k (элементы
        файла нумеруются от нуля). Если такой элемент
        отсутствует, то вывести 0.
*/

function showKElement($filename, $k) {
    if(!file_exists($filename)) return 0;

    $strFile = file_get_contents($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $filesElements = preg_split('/\s+/', $strFile, $k + 1);
    $length = count($filesElements);

    echo $filesElements[$length - 1];
}