<?php

//echo 'Olá mundo!';
//print 'Olá mundo!';

// php://stdout saída padrão STDOUT
// php://stderr saída de erros STDERR
// ob_start() output buffer: STDERR passa pelo buffer

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá Mundo!');

// Lendo direto do arquivo para tela
$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);
