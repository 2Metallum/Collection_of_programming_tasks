<?php

/*
 * Дано имя файла целых чисел. Вывести количество его
    элементов. Если файла с таким именем не существует,
    то вывести –1.
*/

function countIntegersInFile($filename) {
    $countIntegers = 0;
    if(file_exists($filename)) {
        $file = fopen($filename, 'r');
        $count = 0;

        while($line = fgets($file)) {
            $values = sscanf($line, "%d %d %d %d %d %d %d %d %d %d");

            $count += count($values);
        }

        fclose($filename);
        echo $count;
    } else {
        return -1;
    }
}