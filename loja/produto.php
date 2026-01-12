<?php

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome_chegou, $preco_chegou)
    {
        $this->nome = $nome_chegou;
        $this->preco = $preco_chegou;

    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}