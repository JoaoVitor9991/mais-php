<?php

class ContaBancaria {
    private $nome;
    private $Nconta;
    private $saldo =0;

    public function __construct($nome_chegou, $Nconta_chegou)
    {
        $this->nome = $nome_chegou;
        $this->Nconta = $Nconta_chegou;
    }

    public function depositar($valor_depositado) 
    {
        if($valor_depositado > 0){
            $this->saldo += $valor_depositado;
        }
        else echo "Ta duro, deita.";
    }

    public function sacar($valor_sacado)
    {
        $valor_total_saque = $valor_sacado + 2.50;

        if($this->saldo >=$valor_total_saque) {
            $this->saldo -= $valor_total_saque;
            echo "Saque realizado com sucesso.";
        }
         else echo "Pobre";
    }

     public function ver_saldo()
    {
        return "Titular: " . $this->nome . " | Conta: " . $this->Nconta . " | Saldo: R$ " . $this->saldo;
    }
}