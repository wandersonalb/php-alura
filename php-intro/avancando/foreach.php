<?php

$contasCorrentes = [
    123 => [
        'titular' => 'Titular',
        'saldo' => 1000
    ],
    456 => [
        'titular' => 'João',
        'saldo' => 2000
    ],
    789 => [
        'titular' => 'Maria',
        'saldo' => 500
    ]
];

$contasCorrentes[147] = [
    'titular' => 'Tião',
    'saldo' => 5000
];

foreach ($contasCorrentes as $indice => $contasCorrente) {
    echo $indice . ' ' . $contasCorrente['titular'] . PHP_EOL;
}

