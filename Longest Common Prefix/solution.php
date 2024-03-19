<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) return "";

        $prefix = $strs[0]; // Start with the first string as the initial prefix
    
        // Iterate through the rest of the strings
        for ($i = 1; $i < count($strs); $i++) {
            $length = min(strlen($prefix), strlen($strs[$i]));
            $temp = "";
    
            // Compare characters of the current string with the current prefix
            for ($j = 0; $j < $length; $j++) {
                if ($prefix[$j] === $strs[$i][$j]) {
                    $temp .= $prefix[$j]; // Append matching characters to $temp
                } else {
                    break; // Stop as soon as a mismatch is found
                }
            }
    
            $prefix = $temp; // Update prefix to contain the common characters
            if ($prefix === "") break; // If prefix becomes empty, no need to continue
        }
    
        return $prefix;
    }
}
$solution = new Solution();

$strs = ["flow", "float", "flight"];
echo $solution->longestCommonPrefix($strs) . "\n";
?>