<?php
function power($num, $exponent){
    if($exponent == 0){
        return 1;
    }else{
        return $num*power($num, $exponent-1);
    }
}
$num = 2;
$exponent = 3;
echo "The number $num raised to $exponent is: ".power($num, $exponent);
?>