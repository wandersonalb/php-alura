<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{

    public function __get(string $atributo)
    {
        $metodo = 'recupera' . ucfirst($atributo);
        return $this->$metodo();
    }

    public function __set(string $atributo, $valor): void
    {
        $metodo = 'atribui' . ucfirst($atributo);
        $this->$metodo($valor);
    }
}