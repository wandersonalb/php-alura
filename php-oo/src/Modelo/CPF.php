<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function retornaNumeroCpf(): string
    {
        return $this->numero;
    }
}