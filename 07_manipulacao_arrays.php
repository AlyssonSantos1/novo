<?php

// $nomes = array('A', 'B', 'C');
// $nomes = ['A', 'B', 'C'];
//  2 maneiras de criar um array

$nome = 'Alysson';
$company = 'Info';
$ano = 2018;

$infocompany = [
    $nome,
    $company,
    $ano,
];
//acima apenas um exemplo de manipulaçao

// $infocompany = compact('nome','company','ano');
// compact é uma funcao pra maanipular arrays e deixar o codigo menos extenso
// var_dump($infocompany);

// var_dump(is_array($infocompany));
// is_array é outro tipo de manipulaçao de array se for o nome do array imprime true senao falso

// var_dump(in_array('Alysson', $infocompany));


