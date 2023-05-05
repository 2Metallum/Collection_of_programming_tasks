<?php

/*
 * 10.31. Дана строка, содержащая полное имя файла, то есть
        имя диска, список каталогов (путь), собственно имя и
        расширение. Выделить из этой строки расширение
        файла.
*/

function foo($string) {
    $string = strrev($string);
    $pos = strpos($string, ".");
    echo "Расширение файла " . substr($string, 0, $pos);
}

foo("~/FullStask/php/index.php");