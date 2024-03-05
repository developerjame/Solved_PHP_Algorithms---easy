<?php 
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $n = count($nums);
        $result = array_fill(0, $n, 0);

        $left = 0;
        $right = $n-1;

        for($i=$n-1;$i>=0;$i--){
            if(abs($nums[$left]) > abs($nums[$right])){
                $result[$i] = $nums[$left]*$nums[$left];
                $left++;
            }else{
                $result[$i] = $nums[$right]*$nums[$right];
                $right--;
            }
        }
        return $result;
    }
}

// Example usage:
$nums = [-4, -1, 2, 3, 10];
$solution = new Solution();
$result = $solution->sortedSquares($nums);

print_r($result);

?>