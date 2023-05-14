<?php

/*
 * Даны имена четырех файлов. Вывести количество
    файлов с указанными именами, которые имеются в
    текущем каталоге.
*/

function countFilesInDirectory($files) {
    $count = 0;

    foreach ($files as $filename) {
        if (count(glob("./$filename")) > 0) {
            $count++;
        }
    }

    echo "Количество файлов: $count";
}

$files = ['file1.txt', 'file2.txt', 'file3.txt', 'file4.txt'];
countFilesInDirectory($files);