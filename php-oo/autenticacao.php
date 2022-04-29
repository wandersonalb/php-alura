<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    "Um Diretor",
    new CPF('111.111.111-11'),
    10000
);

$autenticador->tentaLogin($diretor, '1234');