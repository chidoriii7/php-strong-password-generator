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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php strong password generator</title>
</head>
<body>

<div>
    <h1>Password Generator</h1>
</div>


<form action="" method="GET">
    <div>
        <label for="pswlen">lunghezza della password    </label>
        <input type="text" name="pswlen">
        <button>submit</button>
    </div>
</form>
    
</body>
</html>