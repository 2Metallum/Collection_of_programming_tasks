<?php

/*
 * 4.11. Элементы равнобедренного прямоугольного
        треугольника пронумерованы следующим образом: 1
        — катет (a), 2 — гипотенуза (c), 3 — высота,
        опущенная на гипотенузу (h), 4 — площадь (S). Дан
        номер одного из этих элементов и его значение.
        Вывести значения остальных элементов данного
        треугольника (в том же порядке).
*/

function foo($param, $value) {
    $parameters = [];

    switch ($param):
        case 'a':
            $parameters['a'] = $value;
            $parameters['c'] = sqrt($value**2 + $value**2);
            $parameters['h'] = $parameters['c'] / 2;
            $parameters['S'] = ($value**2) / 2;
            break;
        case 'c':
            $parameters['c'] = $value;
            $parameters['a'] = $value / sqrt(2);
            $parameters['h'] = $value / 2;
            $parameters['S'] = ($parameters['a']**2) / 2;
            break;
        case 'h':
            $parameters['a'] = $value / sqrt(2);
            $parameters['c'] = $value * 2;
            $parameters['h'] = $value;
            $parameters['S'] = ($parameters**2) / 2;
            break;
        case 'S':
            $parameters['a'] = sqrt(2 * $value);
            $parameters['c'] = sqrt($parameters['a']**2 + $parameters['a']**2);
            $parameters['h'] = $parameters['c'] / 2;
            $parameters['S'] = $value;
            break;
    endswitch;
    print_r($parameters);
}