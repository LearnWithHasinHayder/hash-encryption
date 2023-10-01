<?php 
//letters with punctuations
$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|:<>?[]\;',./";

//print ascii codes
for($i=0; $i<strlen($string); $i++){
    echo $string[$i]." = ".ord($string[$i])."\n";
}