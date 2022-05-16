<?php

namespace App\Alura;

class Usuario
{
    private string $nome;
    private string $sobrenome;
    private string $senha;
    private string $genero;
    private string $tratamento;

    public function __construct(string $nome, string $senha, string $genero)
    {
        $this->setNomeSobrenome($nome);
        $this->validaSenha($senha);
        $this->adicionaTratamentoAoSobrenome($nome, $genero);
    }

    private function adicionaTratamentoAoSobrenome(string $nome, string $genero): void
    {
        if ($genero === 'M') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }

        if ($genero === 'F') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sra.', $nome, 1);
        }
    }

    private function setNomeSobrenome(string $nome): void
    {
        $nomeSobrenome = explode(' ', $nome, 2);

        if ($nomeSobrenome[0] !== '') {
            $this->nome = $nomeSobrenome[0];
        } else {
            $this->nome = 'Nome inválido';
        }

        if ($nomeSobrenome[1] !== '') {
            $this->sobrenome = $nomeSobrenome[1];
        } else {
            $this->sobrenome = 'Sobrenome inválido';
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    private function validaSenha(string $senha): void
    {
        $tamanho = strlen(trim($senha));

        if ($tamanho > 6) {
            $this->senha = $senha;
        } else {
            $this->senha = 'Senha inválida';
        }
    }

    public function getTratamento(): string
    {
        return $this->tratamento;
    }
}