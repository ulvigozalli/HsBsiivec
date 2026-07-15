<?php
function calculateAverage($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $average = $num1 + $num2 + $num3 / 3;
    return $average;
}

$firstVal = 10;
$secondVal = 20;
$thirdVal = 30;
$result = calculateAverage($firstVal, $secondVal, $thirdVal);
echo $result;