<?php

//tipos de funçoes de manipulaçao de arrays que vai retornar o ultimo elemento do array

$idades = ['11', '22', '33', '39', '43', '27', '28', '51', '55'];
// echo $idades[count($idades) - 1];

// echo end($idades);

//filtrar arrays abaixo

$idadesFiltradas = array_filter($idades, function($idade){
    return $idade >= 23;
});

// var_dump($idadesFiltradas);
//funcoes para pegar nomes e as posiçoes nos arrays e deixar tudo maiusculo


$nomes = ['joao', 'carlos', 'miguel'];


// $nomes[0] = strtoupper($nomes[0]);
// $nomes[1] = strtoupper($nomes[1]);
// $nomes[2] = strtoupper($nomes[2]);

$nomes = array_map (function ($nome) {
    return strtoupper($nome);

});



// var_dump($nomes);


