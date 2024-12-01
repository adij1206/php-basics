<?php

$sensitiveData = "Aditya";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepper";

$dataToHash = $sensitiveData . $salt . $pepper;

$hash = hash("sha256", $dataToHash);

echo "Hash String" .  $hash;

/*----*/

$sensitiveData = "Aditya";
$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepper";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($verificationHash === $storedHash) {
    echo "<br> The Hash Data is Matching";
} else {
    echo "<br> The Hash Data is Not Matching";
}



/* 
            Password Hashing
*/

$pwdSignUp = "Abc1234";
$option = [
    'cost' => 12
];

$hashedpwd = password_hash($pwdSignUp, PASSWORD_BCRYPT,$option);

$pwdLogin = "Abc1234";

if (password_verify($pwdLogin, $hashedpwd)) {
    echo "<br> The Password is Matching";
} else {
    echo "<br> The PAssword is not matching";
}

