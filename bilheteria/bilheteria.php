<?php

class Bilheteria 
{
    private $preco = 20.00;
    private $ingressos;
    private $caixa;

    public function __construct()
    {
        $this->ingressos = 10;
        $this->caixa = 0;
    }

    public function receber_dinheiro($valor)
    {
       $this->caixa += $valor;

        echo "Você pagou R$: " . $this->caixa . ". ";
    }

    public function imprimir_bilhete()
    {
        if($this->ingressos > 0){

         if($this->caixa >= $this->preco){
            $this->ingressos -= 1;
            $this->caixa = 0;

            echo "Bom filme! 🍿";
        } else {
            echo "Falta de grana, POBRE, TA DURO DEITA.";
        } 
        } else {
        echo "Esgotado";
    }
    } 
}