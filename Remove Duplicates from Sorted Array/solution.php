<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $n = count($nums);
        if($nums == 0) return 0;

        $slow = 0;

        for($fast=0;$fast<$n;$fast++){
            if($nums[$fast] != $nums[$slow]){
                $slow++;
                $nums[$slow] = $nums[$fast];
            }
        }

        return $slow + 1;
    }
}

$nums = [1,3,5,5,8];
$solution = new Solution();
$k = $solution->removeDuplicates($nums);
echo "The number of unique elements: $k<br>";

for($i=0;$i<$k;$i++){
    echo $nums[$i]." ";
}
?>