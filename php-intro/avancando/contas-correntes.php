<?php

$conta1 = [
    'titular' => 'José',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'João',
    'saldo' => 2000
];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
