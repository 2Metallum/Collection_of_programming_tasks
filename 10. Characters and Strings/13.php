<?php

/*
 * 10.13. Даны две строки: S1 и S2. Проверить, содержится ли
        строка S2 в строке S1. Если да, то вывести номер
        позиции, начиная с которой S2 содержится в S1, если
        нет, то вывести 0.
*/

function foo($s1, $s2) {
    echo strpos($s1, $s2);
}

foo('Ryan Collins', ' Coll');