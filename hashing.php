<?php 
$username  = "JohnDoe";
// $password = "12345ABCD";
// $passwordHash = md5($password);
// echo $passwordHash;
$passwordHash = "fad19b18e34ac26499a4fcf2e58d9349";


$formUserName = "JohnDoe";
$formPassword = "12345ABCD";
//database = username = JohnDoe, password = 12345ABCD


// if($username == "JohnDoe" && $password == "12345ABCD"){
//     echo "Welcome JohnDoe";
// }else{
//     echo "Wrong username or password";
// }

if($formUserName==$username && md5($formPassword)==$passwordHash){
    echo "Welcome JohnDoe";
}else{
    echo "Wrong username or password";
}