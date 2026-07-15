<?php
function hasPrefix($string, $prefix) {
    $pos = strpos($string, $prefix);
    if ($pos == false) {
        $found = false;
        return $found;
    }
    $found = true;
    return $found;
}

$text = "hello world";
$search = "hello";
if (hasPrefix($text, $search)) {
    echo "Found";
} else {
    echo "Not Found";
}