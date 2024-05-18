<?php
function binarysearch($arr, $target){
    $left = 0;
    $right = count($arr)-1;

    while($left<=$right){
        $mid = floor(($left+$right)/2);
        if($arr[$mid] == $target){
            return $mid;
        }
        if($arr[$mid] > $target){
            $right = $mid-1;
        }else{
            $left = $mid+1;
        }
    }
    return -1;
}
?>