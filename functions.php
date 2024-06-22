<?php 

$passwordlength = $_GET['pswlen'];
$finalpassword = '';
// $lowcaseLetters = 'abcdefghijklmnopqrstuvwxyz';
// $uppcaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVXYZ';
// $numbers = '0123456789';
// $symbols = '{}+|°§!€$%&/()=?^*-_:.;,<>';

// $passPool = str_split($lowcaseLetters);
// $passPool = str_split($uppcaseLetters);
// $passPool = str_split($numbers);
// $passPool = str_split($symbols);
function pswRandomizer($passwordlength) {
    $allCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789{}+|!&/()=?^*-_:.;,<>';
    $passPool = [];
    $tempPassword = '';
    $tempArray = '';
    
    $passPool = str_split($allCharacters);
    
    shuffle($passPool);
    
    
    for ($i = 0; $i <= $passwordlength - 1; $i++) {
        
        $tempArray .= $passPool[0];
    
        shuffle($passPool);
    
    }
    
    $finalpassword = $tempArray;
    
    return $finalpassword;
}

$finalpassword = pswRandomizer($passwordlength);


echo $finalpassword;
?>