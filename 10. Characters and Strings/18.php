<?php

/*
 * 10.18. Даны три строки: S1, S2, S3. Заменить в строке S1 все
        вхождения строки S2 на S3.
*/

function foo($s1, $s2, $s3) {
    str_replace($s2, $s3, $s1);

    echo $s1;
}

foo('Ryan Collins Jr', 'n', '˜˜˜˜');