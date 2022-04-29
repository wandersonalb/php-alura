<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$endereco = new Endereco('Cidade', 'Bairro', 'Rua', '10');
$cpf = new Cpf('111.111.111-11');
$titular = new Titular('Nome Teste', $cpf, $endereco);
$contaCorrente = new ContaCorrente($titular);
$contaCorrente->deposita(500);
$contaCorrente->saca(100);
echo $contaCorrente->recuperaSaldo().PHP_EOL;

$contaPoupanca = new ContaPoupanca($titular);
$contaPoupanca->deposita(500);
$contaPoupanca->saca(100);
echo $contaPoupanca->recuperaSaldo().PHP_EOL;

