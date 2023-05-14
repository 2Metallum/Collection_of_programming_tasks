<?php

/*
 * 18.9. Дан файл вещественных чисел. Найти количество его
        участков убывания.
*/

function countRegressArea($filename) {
    $fileContents = file_get_contents($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $numbers = preg_split('/\s+/', $fileContents);
    $regressAreaCount = 0;

    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] < $numbers[$i + 1]) {
            $regressAreaCount++;
        }
    }

    echo "Количество участков убывания в файле: $regressAreaCount";
}