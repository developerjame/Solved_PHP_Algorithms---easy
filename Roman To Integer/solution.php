<?php
class Solution{ 
function romanToInt($s) {
    $romanMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    
    $result = 0;
    
    // Iterate through the Roman numeral string
    for ($i = 0; $i < strlen($s); $i++) {
        // Get the integer value of the current Roman numeral
        $value = $romanMap[$s[$i]];
        
        // If the next numeral is larger than the current one, subtract the current value
        if ($i < strlen($s) - 1 && $romanMap[$s[$i + 1]] > $value) {
            $result -= $value;
        } else {
            $result += $value;
        }
    }
    
    return $result;
}
}
$solution = new Solution();
// Example usage:
echo $solution->romanToInt("III") . "\n";      // Output: 3
echo $solution->romanToInt("LVIII") . "\n";    // Output: 58
echo $solution->romanToInt("MCMXCIV") . "\n";  // Output: 1994
?>