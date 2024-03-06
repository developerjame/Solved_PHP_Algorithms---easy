<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
       if($x==0 || $x==1) return $x;
       
       $left = 1;
       $right = $x;
       $ans = 0;

       while($left<=$right){
        $mid = $left + floor(($right-$left)/2);
        if($mid <= floor($x / $mid)){
            $ans = $mid;
            $left = $mid + 1;
        }else{
            $right = $mid - 1;
        }
       }

       return $ans;
    }
}

$x = 16;
$solution = new Solution();
$result = $solution->mySqrt($x);
echo "The squareroot of $x is: $result";
?>