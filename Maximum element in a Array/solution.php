<?php
function findMax($arr) {
    // Check if the array is empty
    if (empty($arr)) {
        return "Array is empty";
    }

    // Initialize the maximum element with the first element of the array
    $max = $arr[0];

    // Iterate through the array to find the maximum element
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    return $max;
}

// Example usage:
$array = [3, 7, 2, 8, 5];
echo "Maximum element in the array is: " . findMax($array); // Outputs: 8
?>