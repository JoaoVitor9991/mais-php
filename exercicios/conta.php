<?php

abstract class Conta 
{
    protected $saldo;
    protected $titular;
     
    public function __construct($titular_que_chegou)
    {
        $this->titular = $titular_que_chegou;

        $this->saldo = 0;
    }
    
    public function depositar($valor)
    {
        $this->saldo += $valor; 
    }

    public function ver_saldo()
    {
        return $this->saldo;
    }

    abstract public function sacar($valor);
}