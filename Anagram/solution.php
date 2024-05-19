<?php
function isAnagram($str1, $str2){
    $newstr1 = strtolower(str_replace(' ','',$str1));
    $newstr2 = strtolower(str_replace(' ','',$str2));
    if(strlen($newstr1) != strlen($newstr2)){
        return false;
    }
    $sortedStr1 = str_split($newstr1);
    $sortedStr2 = str_split($newstr2);

    sort($sortedStr1);
    sort($sortedStr2);

    if($sortedStr1 === $sortedStr2){
        return true;
    }else{
        return false;
    }
}
$string1 = "listen";
$string2 = "silent";
echo isAnagram($string1, $string2) ? "They are anagrams":"They are not anagrams";
?>