<?php

$photos = $_FILES['photos'];
$path = 'uploads/imgs/';

for ($i = 0; $i < count ($photos['name']); $i++){
    $j = $i + 1;
    if ( move_uploaded_file($photos['tmp_name'][$i], $photos['name'][$i])  )
        echo "Sucesso ao mover Arquivo  {$j} <br>";
    else
        echo "Falha ao mover Arquivo  {$j}  <br>";
}



// echo '<pre>';
// var_dump($_FILES);