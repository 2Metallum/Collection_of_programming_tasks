<?php

/*
 * 18.6. Даны имена двух файлов вещественных чисел.
        Известно, что один из них существует и содержит не
        менее двух элементов, а другой в текущем каталоге
        отсутствует. Создать отсутствующий файл и записать в
        него нулевой и последний элементы существующего
        файла.
*/

function moveInformation($filename1, $filename2) {
    if(!file_exists($filename2)) {
        $strFile = file_get_contents($filename1, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filesElements = preg_split('/\s+/', $strFile);
        $length = count($filesElements);

        if ($length < 2) {
            echo "Файл $filename1 содержит менее двух элементов";
            return;
        }

        $data = [$filesElements[0], $filesElements[$length - 1]];
        $fp2 = fopen('./' . $filename2, 'w');

        if ($fp2) {
            fwrite($fp2, implode(' ', $data));
            fclose($fp2);
        } else {
            echo "Не удалось открыть файл $filename2";
        }

    } else {
        $strFile = file_get_contents($filename2, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filesElements = preg_split('/\s+/', $strFile);
        $length = count($filesElements);

        if ($length < 2) {
            echo "Файл $filename2 содержит менее двух элементов";
            return;
        }

        $data = [$filesElements[0], $filesElements[$length - 1]];
        $fp1 = fopen('./' . $filename1, 'w');

        if ($fp1) {
            fwrite($fp1, implode(' ', $data));
            fclose($fp1);
        } else {
            echo "Не удалось открыть файл $filename1";
        }
    }
}
