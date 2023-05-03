<?php

/*
 * 4.10. Элементы окружности пронумерованы следующим
        образом: 1 — радиус (R), 2 — диаметр (D), 3 — длина
        17
        (L), 4 — площадь круга (S). Дан номер одного из этих
        элементов и его значение. Вывести значения
        остальных элементов данной окружности (в том же
        порядке). В качестве значения Pi использовать 3.14.
*/

function foo($param, $value)
{
    $parameters = [];

    switch ($param):
        case 'R':
            $parameters['R'] = $value;
            $parameters['D'] = $value * 2;
            $parameters['L'] = $parameters['D'] * 3.14;
            $parameters['S'] = 3.14 * $value ** 2;
            break;
        case 'D':
            $parameters['R'] = $value / 2;
            $parameters['D'] = $value;
            $parameters['L'] = $value * 3.14;
            $parameters['S'] = 3.14 * $parameters['R'] ** 2;
            break;
        case 'L':
            $parameters['L'] = $value;
            $parameters['D'] = $value / 3.14;
            $parameters['R'] = $parameters['D'] / 2;
            $parameters['S'] = 3.14 * $parameters['R'] ** 2;
            break;
        case 'S':
            $parameters['S'] = $value;
            $parameters['R'] = sqrt($value / 3.14);
            $parameters['D'] = $parameters['R'] * 2;
            $parameters['L'] = $parameters['D'] * 3.14;
            break;
        default:
            echo 'Incorrect value';
    endswitch;
    print_r($parameters);
}

foo('R', 10);
foo('D', 10);
foo('L', 10);
foo('S', 10);