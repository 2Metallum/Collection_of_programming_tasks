<?php

/*
 *
*/

function Simm($S) {
    if (strlen($S) <= 1) {
        return true;
    } else {
        return ($S[0] == $S[strlen($S)-1]) && Simm(substr($S, 1, -1));
    }
}

$S1 = "Hello, world!";
$S2 = "12321";
$S3 = "abcba";
$S4 = "abccba";
$S5 = "racecar";

echo "Simm($S1) = " . (Simm($S1) ? "true" : "false") . "\n";
echo "Simm($S2) = " . (Simm($S2) ? "true" : "false") . "\n";
echo "Simm($S3) = " . (Simm($S3) ? "true" : "false") . "\n";
echo "Simm($S4) = " . (Simm($S4) ? "true" : "false") . "\n";
echo "Simm($S5) = " . (Simm($S5) ? "true" : "false") . "\n";