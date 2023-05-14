<?php

/*
 * 18.7. Дан файл целых чисел. Вывести количество
        содержащихся в нем серий (то есть наборов
        последовательно расположенных одинаковых
        элементов).
*/

function countSeries($filename) {
    $fileContents = file_get_contents($filename);
    $numbers = explode(' ', $fileContents);
    $seriesCount = 0;
    $seriesLength = 1;

    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] == $numbers[$i - 1]) {
            $seriesLength++;
        } else {
            $seriesCount++;
            $seriesLength = 1;
        }
    }

    $seriesCount++; // Добавляем последнюю серию
    echo "Количество серий в файле: $seriesCount";
}
