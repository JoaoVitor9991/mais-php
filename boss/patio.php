<?php

require_once 'veiculo.php';

class Patio {
    private $carro = [];

    public function entrar(Veiculo $carro_cliente)
    {
        $this->carro [] = $carro_cliente;
    }

    public function buscar($placa_procurada)
    {
        foreach ($this->carro as $c) {
            if ($c->getPlaca() == $placa_procurada) {
                return "Encontrado! O carro é um " . $c->getMarca();
            }
        }

        return "CARRO NÃO ESTÁ AQUI VEI, E AGORA?";
    }
}