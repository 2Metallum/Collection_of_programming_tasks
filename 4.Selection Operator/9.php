<?php

/*
 * 4.9. Локатор ориентирован на одну из сторон света ("С" —
        север, "З" — запад, "Ю" — юг, "В" — восток) и может
        принимать три цифровые команды: 1 — поворот
        налево, –1 — поворот направо, 2 — поворот на 180
        градусов. Дан символ C — исходная ориентация
        локатора и числа N1 и N2 — две посланные ему
        команды. Вывести ориентацию локатора после
        выполнения данных команд.
*/

function foo($c, $n1, $n2) {
    $direction = ['Ю', 'В', 'С', 'З', 'Ю', 'В', 'C', 'З'];

    switch ($c):
        case $direction[2]:
            echo $direction[2 - $n1 + $n2];
            break;
        case $direction[3]:
            echo $direction[3 - $n1 + $n2];
            break;
        case $direction[4]:
            echo $direction[4 - $n1 + $n2];
            break;
        case $direction[5]:
            echo $direction[5 - $n1 + $n2];
            break;
        default:
            echo "Incorrect direction";
            endswitch;
}

foo('С', 1, 2);
foo('З', 1, 2);
foo('Ю', 1, 2);
foo('В', 1, 2);