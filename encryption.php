<?php 
$plainText = "Hello World";

//replace a with b, b with c, c with d and so on
$encryptedText = "";
for($i=0;$i<strlen($plainText);$i++){
    $letter = $plainText[$i];
    $ascii = ord($letter);

    $newAscii = $ascii+10;
    $newLetter = chr($newAscii);
    $encryptedText .= $newLetter;
}

// echo $encryptedText;

// $encryptedText = "Ifmmp!Xpsme";
$encryptedText = "Rovvy*ay|vn";
$decryptedText = "";

for($i=0;$i<strlen($encryptedText);$i++){
    $letter = $encryptedText[$i];
    $ascii = ord($letter);

    $newAscii = $ascii-1;
    $newLetter = chr($newAscii);
    $decryptedText .= $newLetter;
}

// echo $decryptedText;

for($j = 0;$j<=20;$j++){
    $decryptedText = "";;
    for($i=0;$i<strlen($encryptedText);$i++){
        $letter = $encryptedText[$i];
        $ascii = ord($letter);
    
        $newAscii = $ascii-$j;
        $newLetter = chr($newAscii);
        $decryptedText .= $newLetter;
    }
    echo "$j / $decryptedText.\n";
}

echo ord($plainText[0])-ord($encryptedText[0]);

//Facade