<?php

/*
 * 14.2. Описать функцию getLine(Name,k) строкового типа,
        возвращающую k-ю строку текстового файла с именем
        Name (строки нумеруются от 0). Если файл не
        существует или не содержит k-й строки, то функция
        возвращает пустую строку. С помощью этой функции
        вывести пять строк данного файла с указанными
        номерами.
*/
function getLine($Name, $k) {
    if (!file_exists($Name)) {
        return '';
    }
    $arr = file($Name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($k >= count($arr)) {
        return '';
    }
    return $arr[$k];
}

$Name = "file.txt";
$nums = array(2, 5, 7, 10, 12);
foreach ($nums as $k) {
    echo getLine($Name, $k) . "\n";
}