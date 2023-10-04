<?php


// $estado = 'Sao Paulo/SP';
// $arrayState = explode('/', $estado);
// var_dump($arrayState[1]);



$info = 'Sao Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo[2]);

echo '<hr>';

$arrayTeste = ['1','2','3','4','5'];
echo implode(' # ', $arrayTeste);