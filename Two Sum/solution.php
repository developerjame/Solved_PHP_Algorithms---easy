<?php
class Solution{
    public function twoSum($nums, $target){
        $map = array();

        for($i=0;$i<count($nums);$i++){
            $complement = $target-$nums[$i];
            if(array_key_exists($complement, $map)){
                return [$map[$complement], $i];
            }
            $map[$nums[$i]] = $i;
        }
        return [];
    }
}
$nums = [2, 7, 11, 15];
$target = 9;
$solution = new Solution();
$result = $solution->twoSum($nums, $target);
echo "[".$result[0].",".$result[1]."]";
?>