<?php

require_once 'produto.php';

class Carrinho {
    private $espaco = [];

    public function adicionar( Produto $nome_chegou)
    {
        $this->espaco[] = $nome_chegou;
        
    }

    public function exibirTotal()
    {
        $total = 0;
        foreach ($this->espaco as $espacoIndividual) {
           $total += $espacoIndividual->getPreco();
           
        }
        echo "Valor total de Compra: R$: " . $total;
    }    
}