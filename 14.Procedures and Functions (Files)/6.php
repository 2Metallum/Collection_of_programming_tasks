<?php

/*
 * 14.6. Описать процедуру SplitText(Name0,k,Name1,Name2),
        копирующую первые k (>= 0) строк существующего
        текстового файла с именем Name0 в файл Name1, а
        остальные элементы — в файл Name2 (прежнее
        содержимое результирующих файлов стирается). Один
        из результирующих файлов может оказаться пустым.
        Применить эту процедуру к файлу Name0, используя
        указанные значения Name1, Name2 и k.
*/

function SplitText($Name, $k, $Name1, $Name2) {
    if(!file_exists($Name)) return -1;

    $lines = file($Name);
    $fh1 = fopen($Name1, 'w');
    $fh2 = fopen($Name2, 'w');

    for($i = 0; $i < count($lines); $i++) {
        if($i < $k) {
            fwrite($fh1, $lines[$i]);
        } else {
            fwrite($fh2, $lines[$i]);
        }
    }
    fclose(fh1);
    fclose(fh2);
}