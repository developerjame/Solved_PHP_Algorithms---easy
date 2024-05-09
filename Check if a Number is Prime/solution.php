<?php
function isPrime($number) {
    // 1 and numbers less than 1 are not prime
    if ($number <= 1) {
        return false;
    }

    // Check divisibility from 2 to square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; // If divisible, it's not prime
        }
    }

    return true; // If not divisible by any number, it's prime
}

// Example usage:
$number1 = 7;
$number2 = 12;

echo "$number1 is " . (isPrime($number1) ? "prime" : "not prime"); // Outputs: 7 is prime
echo "\n";
echo "$number2 is " . (isPrime($number2) ? "prime" : "not prime"); // Outputs: 12 is not prime
?>