<?php

/*
 * 10.32. Дана строка, содержащая полное имя файла.
        Выделить из строки название последнего каталога
        (без символов "\"). Если файл содержится в корневом
        каталоге, то вывести символ "\".
*/

function foo($path) {
    $last_path = basename(dirname($path));

    if($last_path == "") {
        $last_path = "/";
    }
    echo $last_path;
}

foo("/Users/novyjpolzovatel/Programming Tasks/32.php");