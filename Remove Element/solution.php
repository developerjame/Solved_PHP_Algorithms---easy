<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = 0; // Initialize count of elements not equal to val
        
        // Iterate through each element in the array
        foreach ($nums as $num) {
            // If the element is not equal to val, keep it in the array
            if ($num != $val) {
                $nums[$k] = $num;
                $k++; // Increment count of elements not equal to val
            }
        }
        
        return $k;
    }
}
    
    // Test cases
    $nums1 = [3, 2, 2, 3];
    $val1 = 3;

    $solution = new Solution();
    $k1 = $solution->removeElement($nums1, $val1);
    echo "Output: $k1, nums = [";
    foreach ($nums1 as $num) {
        echo "$num, ";
    }
    echo "_]\n";
    
    $nums2 = [0, 1, 2, 2, 3, 0, 4, 2];
    $val2 = 2;
    $k2 = $solution->removeElement($nums2, $val2);
    echo "Output: $k2, nums = [";
    foreach ($nums2 as $num) {
        echo "$num, ";
    }
    echo "_]\n";
    ?>