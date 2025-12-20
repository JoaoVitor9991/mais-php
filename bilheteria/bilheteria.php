<?php

class Bilheteria 
{
    protected $preco = 20.00;
    protected  $ingressos;
    protected  $caixa;

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
            $this->caixa -= $this->preco;

            echo $this->frase_sucesso();
        } else {
            echo "Falta de grana, POBRE, TA DURO DEITA.";
        } 
        } else {
        echo "Esgotado";
    }
    } 

    protected function frase_sucesso() {
        return "Bom filme! 🍿";
    }
}