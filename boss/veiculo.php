<?php


class Veiculo {
    private $carro;
    private $placa;

    public function __construct($carro_cliente, $placa_cliente)
    {
        $this->carro = $carro_cliente;
        $this->placa = $placa_cliente;
    }

    public function getMarca()
    {
        return $this->carro;
    }

    public function getPlaca()
    {
        return $this->placa;
    }
}