<?php

/*
 * 14.5. Описать процедуру InvertIntFile(Name), меняющую
        порядок следования элементов файла целого типа с
        именем Name на противоположный. Если файл не
        существует или содержит менее двух элементов, то
        процедура не выполняет никаких действий.
        Обработать с помощью этой процедуры три файла с
        данными именами.
*/

function InvertIntFile($Name) {
    if (!file_exists($Name)) return;

    $int_size = 4; // размер одного целого числа в байтах
    $filesize = filesize($Name);
    if ($filesize < 2 * $int_size) return;

    $handle = fopen($Name, "r+b");
    $buffer1 = fread($handle, $int_size);
    fseek($handle, -$int_size, SEEK_END);
    $buffer2 = fread($handle, $int_size);
    fseek($handle, 0, SEEK_END);
    fwrite($handle, $buffer1);
    fseek($handle, $int_size - $filesize, SEEK_CUR);
    fwrite($handle, $buffer2);
    for ($i = 1; $i < ($filesize - 2 * $int_size) / (2 * $int_size); $i++) {
        fseek($handle, $i * $int_size, SEEK_SET);
        $buffer1 = fread($handle, $int_size);
        fseek($handle, -$i * $int_size - $int_size, SEEK_END);
        $buffer2 = fread($handle, $int_size);
        fseek($handle, -$i * $int_size - $int_size, SEEK_END);
        fwrite($handle, $buffer1);
        fseek($handle, $i * $int_size, SEEK_SET);
        fwrite($handle, $buffer2);
    }
    fclose($handle);
}

