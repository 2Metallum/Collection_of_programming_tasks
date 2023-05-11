<?php

/*
 * 14.4. Описать функцию LineCount(Name) целого типа,
        возвращающую число строк в текстовом файле с
        именем Name. Если файл не существует, то функция
        возвращает –1. С помощью этой функции определить
        размер трех файлов с данными именами.
*/

function LineCount($Name) {
    if(!file_exists($Name)) return -1;

    return $countStringsInFile = file($Name, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
}