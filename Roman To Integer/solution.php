<?php
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roadMap = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $result = 0;
        $preValue = 0;

        for($i=strlen($s)-1;$i>=0;$i--){
            $currentValue = $roadMap[$s[$i]];
            if($currentValue > $preValue){
                $result+=$currentValue;
            }else{
                $result-=$currentValue;
            }
            $preValue = $currentValue;
        }
        return $result;
    }
}

$num = "IV";
$solution = new Solution();
echo $solution->romanToInt($num);
?>