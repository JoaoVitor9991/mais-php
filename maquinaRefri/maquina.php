<?php

class MaquinaDeRefri {
    private $preco = 5.00;
    private $saldo_cliente;
    private $estoque;

    public function __construct()
    {
        $this->estoque = 3;
        $this->saldo_cliente = 0;
    }

    public function inserir_dinheiro($valor)
    {
        $this->saldo_cliente += $valor;

        echo "Plim, Vc inseriu R$ " . $valor . ", Saldo Atual: R$ " . $this->saldo_cliente . "<br>";
    }

    public function comprar()
    {
        if($this->estoque > 0){

            if($this->saldo_cliente >= $this->preco){
                $this->estoque -= 1;
                $this->saldo_cliente = 0;

                echo "Compra Realizada! Retire sua lata <br>";
            } else {
                echo "Falta dinheiro! <br>";
            }

        } else {
            echo "Não tem estoque! <br>";
        }
        
    }
}