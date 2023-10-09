<?php

$a = 2;
$b = 1;

$result = $a + $b;
echo "O resultado da soma entre {$a} +  {$b} = {$result} <br>";

$result = $b - $a ;
echo "O resultado da subtracao entre {$b} -  {$a} = {$result} <br>";

$result = $a * $b;
echo "O resultado da multiplicacao entre {$a} *  {$b} = {$result} <br>";

$result = $b / $a ;
echo "O resultado da divisao entre {$b} / {$a} = {$result} <br>";

$result = $b % $a ;
echo "O resultado da subtracao entre {$b} %  {$a} = {$result} <br>";

if ($b % 2 == 0)
    echo "É par";
else
    echo "É impar";

$result = (2+2-8/4) *2;
echo $result;


