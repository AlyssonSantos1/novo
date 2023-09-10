<?php

// $Monza = 'Max';
// $italia = 'Verstappen';

// // echo $Monza.' '.$italia;

// $autodromo = $Monza .' '. $italia .' '. 2023;
// echo $autodromo;

// echo $autodromo;
// se eu quiser dar um espaço entre os nomes posso ir na propria variavel e dar um espaco antes d
//de fechar as aspas 'Max '
//ou entao tambem posso delarar echo $Monza.' '.$italia;...
// ou seja dando espaços entre as variaveis colocando os dois pontos ali e as aspas entre elas 

// ou entao se eu quiser posso declarar outra variavel como fiz acima e chamar o echo depois pra
//ja chamar a funçao dentro dessa variavel tudo junto

$nome = 'Alysson Santos';
$empresa = 'Balneario do Sol';

// echo ' A '. $empresa. ' é de '. $nome;
// essa maneira acima é a forma mais chata de concatenar e abaixo vai haver uma forma + simples e pratica

echo "A {$empresa} é de: {$nome}";
//obs:. esse formato acima precisa ser com aspas duplas por causa da concatenaçao,
// e é recomendado ate pra ficar legivel passar as variaveis entre chaves