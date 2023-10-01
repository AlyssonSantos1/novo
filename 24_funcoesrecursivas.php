<?php
// 3 => 3*2*1
// 2 => 2*1

// funcoes recursivas

function factorial(int $number): int
{
    if ($number <= 1)
        $number = $number;
    else
        $number *= factorial ($number - 1);

        return $number;
    // $number * $number - 1;
    // return $number = $number * factorial($number - 1);
    // return $number *= factorial($number - 1);
    // dessa forma acima vai continuar chamando a funcao infinitamente


    // return $number *= factorial($number - 1);


}

echo factorial(4);