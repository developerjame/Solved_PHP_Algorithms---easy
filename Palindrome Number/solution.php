<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $str = (string) $x;
        $length = strlen($str);

        for($i=0;$i<$length/2;$i++){
            if($str[$i] !== $str[$length-$i-1]){
                return false;
            }
        }
        return true;
    }
}
$x = 241;
$solution = new Solution();
$result = $solution->isPalindrome($x);
echo $result ? "True":"False";
?>