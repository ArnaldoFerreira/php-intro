<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio.';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome dever conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome e muito extenso';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "0 nadador " .$nome. " compete na categoria " .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "0 nadador " .$nome. " compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "0 nadador " .$nome. " compete na categoria adulto";
    }
}