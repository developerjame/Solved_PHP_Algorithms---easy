<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Example usage:
$number = 5;
echo "Factorial of $number is: " . factorial($number); // Outputs: 120
?>