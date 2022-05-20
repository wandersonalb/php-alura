<?php

$arquivo = fopen('cursos-php.txt', 'a');

$curso = "Curso 1\n";

fwrite($arquivo, $curso);

fclose($arquivo);

file_put_contents('cursos-php1.txt', $curso, FILE_APPEND);