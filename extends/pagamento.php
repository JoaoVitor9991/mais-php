<?php

class Pagamento {
    protected $valor;

    public function __construct($valor_chegou)
    {
        $this->valor = $valor_chegou;
    }

    public function getValorFinal()
    {
        return $this->valor;
    }

}