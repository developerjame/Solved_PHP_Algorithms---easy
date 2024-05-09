<?php
function reverseString($str) {
    $length = strlen($str);
    $reversed = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

// Example usage:
$string = "Hello, world!";
$reversedString = reverseString($string);
echo $reversedString; // Outputs: "!dlrow ,olleH"
?>