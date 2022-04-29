<?php

namespace Alura\Banco\Modelo;

/**
 * @property string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    /**
     * @param string $cidade
     * @param string $bairro
     * @param string $rua
     * @param string $numero
     */
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function atribuiCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function atribuiBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function atribuiRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function atribuiNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero} - {$this->bairro}, {$this->cidade}";
    }

}