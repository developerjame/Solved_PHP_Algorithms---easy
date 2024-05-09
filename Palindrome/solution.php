<?php
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanStr = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    
    // Get the length of the string
    $length = strlen($cleanStr);

    // Compare characters from start and end, moving towards the center
    for ($i = 0; $i < $length / 2; $i++) {
        if ($cleanStr[$i] !== $cleanStr[$length - $i - 1]) {
            return false; // If characters don't match, it's not a palindrome
        }
    }

    return true; // If the loop completes, it's a palindrome
}

// Example usage:
$string1 = "A man, a plan, a canal, Panama!";
$string2 = "racecar";
$string3 = "hello";

echo isPalindrome($string1) ? "Palindrome" : "Not a Palindrome"; // Outputs: Palindrome
echo "\n";
echo isPalindrome($string2) ? "Palindrome" : "Not a Palindrome"; // Outputs: Palindrome
echo "\n";
echo isPalindrome($string3) ? "Palindrome" : "Not a Palindrome";
?>