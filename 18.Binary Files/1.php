<?php

/*
 * 18.1. Дана строка S. Если S является допустимым именем
        файла, то вывести True и создать файл с этим именем.
        Если файл с именем S создать нельзя, то вывести
        False.
*/

function isFileNameValid($filename) {
    $isValid_regex = '/^\w+\.\w+';
    if(!preg_match($isValid_regex, $filename)) {
        return false;
    }

    if(file_exists($filename)) {
        return false;
    }

    if(!touch($filename)) {
        return false;
    }

    return true;
}
