<?php
function divideNumbers($a, $b) {
    $numerator = $a;
    $denominator = $b;
    $result = $numerator / $denominator;
    return $result;
}

$numA = 10;
$numB = 0;
$output = divideNumbers($numA, $numB);
echo $output;