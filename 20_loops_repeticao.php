<?php
 
$nomes = ['a', 'b', 'c', 'd'];

 $i = 0;

//  while($i<=10){
//     echo $i;

//     $i++;

while($i < count($nomes)){
    echo $nomes[$i];

    $i++;

}
$a = 11;

echo '<hr>';

do {
    echo $a;

    $a++;
    # code...
} while ($a <= 10);