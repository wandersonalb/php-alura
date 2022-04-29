<?php

require_once 'autoload.php';


use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umaFuncionaria = new Gerente(
    'Funcionaria Teste',
    new CPF('222.111.111-11'),
    20000
);

$umDiretor = new Diretor(
    'Um diretor',
    new CPF('000.000.000-00'),
    10000
);

$dev = new Desenvolvedor(
    'Um Dev',
    new CPF('000.000.000-00'),
    1000
);

$editor = new EditorVideo(
    'Um editor',
    new CPF('222.222.222.-22'),
    500
);

$dev->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($umaFuncionaria);
$controlador->adicionarBonificacao($umDiretor);
$controlador->adicionarBonificacao($dev);
$controlador->adicionarBonificacao($editor);

echo $controlador->recuperaTotal();