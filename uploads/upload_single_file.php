<?php

$foto = ($_FILES['imagem']);
$path = 'uploads/imgs/';


if (move_uploaded_file($foto['tmp_name'], $path . $foto['name']))
    echo 'Sucesso';
else
    echo 'Falha no Upload!';


// echo '<pre>';
// var_dump($_FILES);