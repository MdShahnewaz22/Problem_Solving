<?php
function linearSearch($arr, $target) {
    foreach ($arr as $index => $value) {
        if ($value === $target) {
            return $index; // Return index if found
        }
    }
    return -1; // Return -1 if not found
}

// Example usage:
$numbers = [10, 20, 30, 40, 50];
$target = 30;

$result = linearSearch($numbers, $target);

if ($result !== -1) {
    echo "Value $target found at index $result.";
} else {
    echo "Value $target not found in the array.";
}
?>
