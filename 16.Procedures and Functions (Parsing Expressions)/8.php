<?php

/*
 * 16.8. Проверить правильность расстановки скобок в строке
        S. Текст в строке S определяется следующим образом:
        <текст> ::= <элемент> | <элемент><текст>
        <элемент> ::= a | b | c | (<текст>) | [<текст>] |
        {<текст>} Если текст составлен правильно, то
        вывести True, иначе вывести False.
*/

function checkBrackets($expression) {
    $stack = [];

    $bracket_regex = '/[\(\)\[\]\{\}]/';
    for($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];

        if(preg_match($bracket_regex, $char)) {
            array_push($stack, $char);
        }
        if ($char === ')' || $char === ']' || $char === '}') {
            if (count($stack) === 0) {
                return false;
            }
            $last_bracket = array_pop($stack);

            if (($last_bracket === '(' && $char !== ')') || ($last_bracket === '[' && $char !== ']') || ($last_bracket === '{' && $char !== '}')) {
                return false;
            }
        }
    }

    if(count($stack) > 0) {
        return false;
    }
}

$result = checkBrackets('(a{b})[c]d');
var_dump($result); // Выведет bool(true)
