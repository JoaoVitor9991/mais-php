<?php

require_once 'bilheteria.php';
require_once 'filme.php';

class Bilheteriavip extends Bilheteria{
    protected $preco = 50.00;

    public function __construct(Filme $filme_chegou)
    {
        $this->ingressos = 5;
        $this->caixa = 0;
        $this->filme = $filme_chegou;
    }

    protected function frase_sucesso()
    {
        return "Pagamento confirmado. Pegue seu Espumante e Pipoca Trufada. Bom filme! 🥂. Você vai assistir o filme: " . $this->filme->getFilme() . "🍿";
    }
}