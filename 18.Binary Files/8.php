<?php

/*
 * 18.8. Дан файл вещественных чисел. Найти количество его
        локальных экстремумов.
*/

function countExtremes($filename) {
    $fileContents = file_get_contents($filename , FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $numbers = explode(' ', $fileContents);
    $extremesCount = 0;

    for ($i = 1; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] > $numbers[$i - 1] && $numbers[$i] > $numbers[$i + 1]) {
            $extremesCount++;
        } elseif ($numbers[$i] < $numbers[$i - 1] && $numbers[$i] < $numbers[$i + 1]) {
            $extremesCount++;
        }
    }

    echo "Количество локальных экстремумов в файле: $extremesCount";
}
