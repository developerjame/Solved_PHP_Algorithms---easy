<?php
function reverseWords($words){
    $newstatement = explode(" ",$words);
    $reversestatement = array_reverse($newstatement);

    $reversedwords = implode(" ",$reversestatement);

    return $reversedwords;
}
$words = "Good morning";
echo "Original statement: $words";
echo "<br>";
echo "Reversed statement: ".reverseWords($words);
?>