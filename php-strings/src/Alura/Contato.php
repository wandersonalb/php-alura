<?php

namespace App\Alura;

class Contato
{
    private string $email;
    private string $endereco;
    private string $cep;
    private string $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->endereco = $endereco;
        $this->cep = $cep;

        if ($this->validarEmail($email) !== false) {
            $this->setEmail('Email inválido');
        } else {
            $this->setEmail($email);
        }

        if ($this->validarTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone('Telefone inválido');
        }
    }

    private function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEnderecoCep(): string
    {
        return implode(' - ', [$this->endereco, $this->cep]);
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, '@');

        if ($posicaoArroba === false) {
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    private function validarEmail(string $email)
    {
        return filter_var($email, 0, FILTER_VALIDATE_EMAIL);
    }

    private function validarTelefone(string $telefone): int
    {
        //1111-2222
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }
}