<?php
require_once 'conta.php';
require_once 'Tributavel.php';

class ContaCorrente extends Conta implements Tributavel
{   
    public function sacar($valor)
    {
        $valor_total_saque = $valor + 2.50;

        if ($this->saldo >= $valor_total_saque) {
            $this->saldo -= $valor_total_saque;
            echo "Saque realizado com sucesso! <br>";
        } else {
            echo "Ta duro, deita";
        }
    }

    public function calcular_imposto()
    {
        return $this->saldo * 0.01;
    }
}