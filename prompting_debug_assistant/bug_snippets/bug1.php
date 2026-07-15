<?php
function checkAge($age) {
    $minimumAge = 18;
    if ($age >= $minimumAge) {
        $status = "Adult";
    return $status;
} else {
        $status = "Minor";
        return $status;
    }
}

$testAge = 20;
$result = checkAge($testAge);
echo $result;