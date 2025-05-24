<?php

function binarySearch($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($arr[$mid] == $target) {
            return $mid; // Target found at index $mid
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return -1; // Target not found
}

// Example usage:
$numbers = [10, 20, 30, 40, 50, 60, 70]; // Sorted array
$searchValue = 50;

$result = binarySearch($numbers, $searchValue);

if ($result !== -1) {
    echo "Value found at index: " . $result;
} else {
    echo "Value not found in the array.";
}
?>
