<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Uma Cidade',
    'Um Bairro',
    'Uma Rua',
    '100'
);

$outroEndereco = new Endereco(
    'Outra Cidade',
    'Outro Bairro',
    'Outra Rua',
    '200'
);

echo $umEndereco . PHP_EOL;

$umEndereco->cidade = 'Cidade Alterada';

echo $umEndereco->cidade;

