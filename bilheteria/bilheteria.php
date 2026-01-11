<?php

class Bilheteria 
{   
    private static $lucro_total = 0;
    protected $preco = 20.00;
    protected  $ingressos;
    protected  $caixa;
    protected $filme;


    public function __construct(Filme $filme_chegou)
    {
        $this->ingressos = 10;
        $this->caixa = 0;
        
        $this->filme = $filme_chegou;
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
            self::$lucro_total += $this->preco;

            echo $this->frase_sucesso();
        } else {
            echo "Falta de grana, POBRE, TA DURO DEITA.";
        } 
        } else {
        echo "Esgotado";
    
    }

    
    } 

    protected function frase_sucesso() {
        return "Bom filme!  você vai assistir o filme: " . $this->filme->getFilme() . "🍿";
    }

    public static function getLucroTotal(){
        return self::$lucro_total;
    }
}