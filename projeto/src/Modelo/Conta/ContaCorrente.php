<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    public function transfere(float $valorATransferir, $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}