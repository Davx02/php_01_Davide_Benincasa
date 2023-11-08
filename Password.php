<?php

// password con almeno 8 caratteri, almeno 1 numero, 1 maiuscola e 1 carattere speciale




// $firstRule = false;
// $secondRule = false;
// $thirdRule = false;
// $fourthRule = false;

// if (strlen($password) >=8) {
//     $firstRule = true;
// } else {
//     echo ("lunghezza passowrd troppo corta" . " ");
// };

// for ($i=0; $i < strlen($password); $i++) { 
//     if (is_numeric($password[$i])) {
//         $secondRule = true;
//         break;
//     }
// };

// for ($i=0; $i < strlen($password); $i++) { 
//     if (ctype_upper($password[$i])) {
//         $thirdRule = true;
//         break;
//     }
// };

// $specialChars = ["?", "!", "%", "$"];
// foreach ($specialChars as $char) {
//     if (str_contains($password, $char)) {
//         $fourthRule = true;
//         break;
//     }
// };

// if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
//     echo("password creata");
// } else {
//     $password = readline("inserisci password:");
// };

function checkLength($password){
    if (strlen($password) >=8) {
        return true;
    }
        return false;
}

function checkNumber($password) {
    for ($i=0; $i < strlen($password); $i++) { 
    if (is_numeric($password[$i])) {
        return true;
    }
}
        return false;
}

function checkUpper($password){
    for ($i=0; $i < strlen($password); $i++) { 
    if (ctype_upper($password[$i])) {
        return true;
    }
}
        return false;
}

function checkSpecial($password){
    $specialChars = ["?", "!", "%", "$"];

    foreach ($specialChars as $char) {
        if (str_contains($password, $char)) {
            return true;
    }
}
            return false;
}

function checkPassword(){

    $password = readline("inserisci password:");
    // $firstRule = checkLength($password);
    // $secondRule = checkNumber($password); 
    // $thirdRule = checkUpper($password);
    // $fourthRule = checkSpecial($password);

    if (checkLength($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)) {
        echo "password creata";
        return true;
    } else {
        echo "password non valida  \n";
        return false;
    }
}


do {
    $passwordValid = checkPassword();
} while ($passwordValid == false);
    