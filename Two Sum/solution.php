<?php
class Solution{
    public function twoSum($nums, $target){
        $map = array();

        // Iterate through the array
        for($i=0;$i<count($nums);$i++){
            // Calculate the complement for the current number
            $complement = $target-$nums[$i];

            // Check if the complement exists in the hashmap
            if(array_key_exists($complement, $map)){
                // If found, return the indices
                return [$map[$complement], $i];
            }
            // Otherwise, store the current number and its index in the hashmap
            $map[$nums[$i]] = $i;
        }
        // Return an empty array if no solution is found
        return [];
    }
}
$nums = [2, 7, 11, 15];
$target = 9;
$solution = new Solution();
$result = $solution->twoSum($nums, $target);
echo "[".$result[0].",".$result[1]."]";
?>