<?php

// tipos de criptografias todas abaixo!

// $salt = 'hsbdsbndsndcn';
$password = 123456;

// echo md5($password);
// echo sha1($password);

// echo crypt($password, $salt);
// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_decode($passCr);
// echo hash('sha512', $password);
// echo strlen(hash('sha512', $password));

echo cryptC($password);

function cryptC(String $Value ): String
{
    
    $hash = hash('sha512', sha1(md5( crypt($Value, 'hsbdsbndsndcn'))));

    return $hash;
}

