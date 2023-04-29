<?php

/*1.1. Даны два ненулевых числа. Найти их сумму, разность,
произведение и частное.*/


$a = 12;
$b = 1823;
$operationArr = ['+', '-', '/', '*'];

$i = 0;
while($i < count($operationArr)) {
    switch ($operationArr[$i]):
        case '+':
            echo $a + $b;
            break;
        case '-':
            echo $a - $b;
            break;
        case '/':
            echo $a / $b;
            break;
        case '*':
            echo $a * $b;
            break;
    endswitch;
}
