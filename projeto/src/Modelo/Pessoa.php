<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    protected CPF $cpf;

    private const NUMERO_MININO_CARACTERES_NOME_TITULAR = 5;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->retornaNumeroCpf();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < self::NUMERO_MININO_CARACTERES_NOME_TITULAR) {
            echo "Nome precisa ter pelo menos 5 caractetes.";
            exit();
        }
    }
}