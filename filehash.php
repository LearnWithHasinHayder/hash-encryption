<?php 
$content = file_get_contents("./abcd.txt");
// echo $content;

$hash = md5($content);
echo $hash;