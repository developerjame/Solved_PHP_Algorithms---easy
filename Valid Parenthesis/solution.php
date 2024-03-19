<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $mapping = array(
            ')'=>'(',
            ']'=>'[',
            '}'=>'{'
            );

        for($i=0;$i<strlen($s);$i++){
            $char = $s[$i];

            if(array_key_exists($char, $mapping)){
                $topElement = array_pop($stack);
                if($topElement != $mapping[$char]){
                    return false;
                }
            }
            else{
                array_push($stack, $char);
            }
        }
        return empty($stack);
    }
}
$s1 = "(]";
$solution = new Solution();
var_dump($solution->isValid($s1));
?>