<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $set = [];
        foreach($nums as $num){
            if(isset($set[$num])){
                return true;
            }
            $set[$num] = true;
        }
        return false;
    }
}
$nums1 = [1, 2, 3, 5];
$nums2 = [1, 2, 3, 4];
$nums3 = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];

$solution = new Solution();
echo $solution->containsDuplicate($nums1) ? "True":"False";
?>