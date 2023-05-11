<?php

/*
 * 13.1. Описать функцию IsIdent(S) целого типа,
        проверяющую, является ли строка S допустимым
        идентификатором Паскаля. При утвердительном
        ответе возвращается 0. Если S является пустой
        строкой, то возвращается –1, если строка начинается
        с цифры, то возвращается –2. Если S содержит
        недопустимые символы, то возвращается номер
        первого недопустимого символа. Проверить с
        помощью этой функции пять данных строк.
*/

function IsIdent($S) {
    if($S == '') {
        return -1;
    } elseif (ctype_digit($S[0])) {
        return -2;
    } else {
        for ($i = 0; $i < strlen($S); $i++) {
            if(!ctype_alpha($S[$i]) && !ctype_digit($S[$i])) {
                return $i+1;
            }
        }
    }

    return 0;
}