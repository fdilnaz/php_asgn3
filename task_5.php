<?php

function generatePassword($length){
    $lowercase_alphabets = "abcdefghijklmnopqrstuvwxyz";
    $uppercase_alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()_+";
    $numbers = "1234567890";

    $all_alphabets = $lowercase_alphabets . $uppercase_alphabets . $special_characters . $numbers;

    $result = '';
    $alphabetLength = strlen($all_alphabets) - 1;
    
    for($i=0; $i < $length; $i++){
        $random = random_int(0, $alphabetLength);
        $result .= $all_alphabets[$random];
    }
    return $result;
}

$length = 12;
$password = generatePassword($length);

echo $password;