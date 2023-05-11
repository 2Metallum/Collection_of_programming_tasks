<?php

/*
 * 14.1. Описать функцию getInt(Name,k) целого типа,
        возвращающую k-й элемент файла целых чисел с
        именем Name (элементы нумеруются от 0). Если файл
        не существует или не содержит k-го элемента, то
        функция возвращает 0. С помощью этой функции
        вывести пять элементов данного файла с указанными
        номерами.
*/

function getInt($Name, $k) {
    if(!file_exists($Name)) return 0;

    $result = file($Name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if($k >= count($result)) return 0;
    return (int) $result[$k-1];
}

$Name = "file.txt";
$nums = array(2, 5, 7, 10, 12);
foreach ($nums as $k) {
    echo getInt($Name, $k) . "\n";
}