<?php

$nome = 'Alysson';

if(isset($nome))
    echo $nome;
else
    echo 'Nao existe';

echo '<hr>';

unset($nome);

if(isset($nome))
    echo $nome;
else
    echo 'Nao existe';