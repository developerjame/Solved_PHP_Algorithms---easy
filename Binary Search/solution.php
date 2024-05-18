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
$arr = [2,3,5,7,8,11,15];
$target = 5;
$index = binarysearch($arr, $target);
if($index != -1){
    echo "The element $target is present at index: $index";
}else{
    echo "The element $target is not present in the array";
}
?>