<?php

if ($_REQUEST['nome'] == ''  && strlen($_REQUEST['nome']) <= 3) {
    echo "o campo nome é invalido";

    return;
}
    echo "Nome: {$_REQUEST['nome']}";
    echo '<hr>';
    echo "Senha: {$_REQUEST['senha']}";
    echo '<hr>';
    echo "Email: {$_REQUEST['email']}";
    echo '<hr>';
    echo "Concordou? " . isset($_REQUEST['Concordo']) && $_REQUEST['Concordo'] != '' ? 'Sim'  :  'Nao';
    echo '<hr>';
    echo "Sexo: {$_REQUEST['sexo']}";
    echo '<hr>';
    echo "Estado: {$_REQUEST['Estado']}";
    echo '<hr>';
    echo "Descricao: {$_REQUEST['descricao']}";




// echo "Nome: {$_POST['nome']}";
// echo '<hr>';
// echo "Senha: {$_POST['senha']}";
// echo '<hr>';
// echo "Email: {$_POST['email']}";
// echo '<hr>';
// echo "Concordou? " . isset($_POST['Concordo']) && $_POST['Concordo'] != '' ? 'Sim'  :  'Nao';
// echo '<hr>';
// echo "Sexo: {$_POST['sexo']}";
// echo '<hr>';
// echo "Estado: {$_POST['Estado']}";
// echo '<hr>';
// echo "Descricao: {$_POST['descricao']}";)



