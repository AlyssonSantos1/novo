<?php

$taxa = 2;

function sum(int $n1, int $n2):array
{
    $teste = 12;

    // $taxatwo = 2;[
    
    global $taxa;

    $soma = ($n1 + $n2) * $taxa;

    return[
        'teste' => $teste,
        'soma' => $soma,

    ];
    
    // return ($n1 + $n2) * $taxa;
}

// $result =  sum(1,2);
// var_dump($result['soma']);
// echo $teste;
// echo sum(2,2);
echo sum(2,2)['soma'];