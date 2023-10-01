<?php 
$string = "Hello dosto, I really really love you";

//find ascii code of each letter
for($i=0; $i<strlen($string); $i++){
    echo ord($string[$i])." ";
}

echo "\n";

//72 101 108 108 111 32 100 111 115 116 111 44 32 73 32 114 101 97 108 108 121 32 114 101 97 108 108 121 32 108 111 118 101 32 121 111 117
$numbers = array(72, 101, 108, 108, 111, 32, 100, 111, 115, 116, 111, 44, 32, 73, 32, 114, 101, 97, 108, 108, 121, 32, 114, 101, 97, 108, 108, 121, 32, 108, 111, 118, 101, 32, 121, 111, 117);

foreach($numbers as $number){
    echo chr($number);
}
?>

