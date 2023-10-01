<?php

function pt(String $value)
{
    echo "{$value} <br>";
}
// $teste = 123;
// pt($teste);
// pt(321);
// pt('algo');
// pt(50);
// pt(884);

// 
function sum(int $n1, int $n2):int
{
    return $n1 + $n2;
}

// echo sum(12,90);

function sumTwo(int $n1, int $n2, int $taxa = 2):int
{
    return ($n1 + $n2) *$taxa;
}

echo sumtwo(1,2,);