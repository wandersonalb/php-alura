<?php
//só suporta inteiro ou string como indice/chave
$array = [
    1 => 'a',
    '1' => 'b', //sobrescreve
    1.5 => 'c', //converte para inteiro
    true => 'd' //converte para 1
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
