<?php

/*
 * 14.7. Описать процедуру
        ConcatFile(NameA,NameB,NameAB), позволяющую
        объединить содержимое двух двоичных файлов
        NameA и NameB одного и того же типа в новом файле
        NameAB. Использовать процедуры BlockRead и
        BlockWrite. Применить эту процедуру к парам
        исходных файлов Name1–Name2, Name1–Name3 и
        Name2–Name3, создав файлы с именами Name12,
        Name13, Name23.
*/

function ConcatFile($NameA, $NameB, &$NameAB) {
    file_put_contents($NameAB, $NameA, FILE_APPEND);
    file_put_contents($NameAB, $NameB, FILE_APPEND);
}