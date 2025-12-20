<?php

require_once 'bilheteria.php';

class Bilheteriavip extends Bilheteria{
    protected $preco = 50.00;

    public function __construct()
    {
        $this->ingressos = 5;
        $this->caixa = 0;
    }

    protected function frase_sucesso()
    {
        return "Pagamento confirmado. Pegue seu Espumante e Pipoca Trufada. Bom filme! 🥂";
    }
}