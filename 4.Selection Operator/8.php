<?php

/*
 * 4.8. Робот может перемещаться в четырех направлениях
        ("С" — север, "З" — запад, "Ю" — юг, "В" — восток) и
        принимать три цифровые команды: 0 — продолжать
        движение, 1 — поворот налево, –1 — поворот
        направо. Дан символ C — исходное направление
        робота и число N — посланная ему команда. Вывести
        направление робота после выполнения полученной
        команды.
*/

function foo($c, $n)
{
    $direction = ['В', 'С', 'З', 'Ю', 'В', 'C'];

    switch ($c):
        case $direction[1]:
            echo $direction[1 - ($n)];
            break;
        case $direction[2]:
            echo $direction[2 - ($n)];
            break;
        case $direction[3]:
            echo $direction[3 - ($n)];
            break;
        case $direction[4]:
            echo $direction[4 - ($n)];
            break;
        default:
            echo "Incorrect direction";
    endswitch;
}

foo('С', 1);
foo('З', 1);
foo('Ю', 1);
foo('В', 1);