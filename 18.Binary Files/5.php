<?php

/*
 * 18.5. Дан файл целых чисел, содержащий не менее четырех
        элементов. Вывести его нулевой, первый,
        предпоследний и последний элементы.
*/

function showFirstAndLastTwo($filename) {
    if(!file_exists($filename)) return 0;

    $strFile = file_get_contents($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $filesElements = preg_split('/\s+/', $strFile);
    $length = count($filesElements);

    if ($length < 4) {
        echo "Файл содержит менее четырех элементов";
        return;
    }

    echo "Нулевой элемент: " . $filesElements[0] . PHP_EOL;
    echo "Первый элемент: " . $filesElements[1] . PHP_EOL;
    echo "Предпоследний элемент: " . $filesElements[$length - 2] . PHP_EOL;
    echo "Последний элемент: " . $filesElements[$length - 1] . PHP_EOL;
}