<?php

$nomeArquivo = 'lista-cursos.txt';

echo 'Lendo o arquivo todo' . PHP_EOL;
$arquivo = fopen($nomeArquivo, 'r');
$tamanhoDoArquivo = filesize($nomeArquivo);
$cursos = fread($arquivo, $tamanhoDoArquivo);
echo $cursos . PHP_EOL;
fclose($arquivo);

echo 'Lendo o arquivo linha a linha' . PHP_EOL;
$arquivo = fopen($nomeArquivo, 'r');
while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso;
}
fclose($arquivo);
echo PHP_EOL;

echo 'Lendo o arquivo com file_get_contents' . PHP_EOL;
$cursos = file_get_contents($nomeArquivo);
echo $cursos . PHP_EOL;
echo 'Carregando o conteúdo de um arquivo em um array' . PHP_EOL;
$arquivo = file($nomeArquivo);
var_dump($arquivo);
