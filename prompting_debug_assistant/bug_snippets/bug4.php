<?php
function printColors($colors) {
    $total = count($colors);
    for ($i = 0; $i <= $total; $i++) {
        $currentColor = $colors[$i];
        echo $currentColor;
        echo " ";
    }
}

$list = ["red", "green", "blue"];
printColors($list);