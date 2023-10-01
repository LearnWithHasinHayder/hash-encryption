<?php 
$string = "Hidden Important Text";
$key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// $newKey = str_shuffle($key);
$newKey = "hZWELpFjSUJXdG04BsutbiQ2NweVn6TrkyRPD5KMfxCY7IO9m3aqgHvo8cz1Al ";
// $newKey = "uXD7P5OtLAK4VIrB 1hS6TCMxcReGsjd8mJqgoWnwlzfFkb3HZ2yYpQ9E0UNvia";
// echo $newKey;
// echo str_shuffle($key);

$encryptedText = "";
for($i=0; $i<strlen($string); $i++){
    $currentLetter = $string[$i];
    $currentPosition = strpos($key, $currentLetter); //
    $replacement = $newKey[$currentPosition];
    $encryptedText .= $replacement;
}
// echo $encryptedText;
//ySEELG Rd40sthGt IL2t

$text = "ySEELG Rd40sthGt IL2t";
$decryptedText = "";
for($i=0; $i<strlen($text); $i++){
    $currentLetter = $text[$i];
    $currentPosition = strpos($newKey, $currentLetter);
    $replacement = $key[$currentPosition];
    $decryptedText .= $replacement;
}
echo $decryptedText;

