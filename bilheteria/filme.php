<?php

require_once 'bilheteria.php';

Class Filme {
    private $filme;
    private $classificacao;

    public function __construct($filme_chegou, $classificacao_chegou)
    {
        $this->filme = $filme_chegou;
        $this->classificacao = $classificacao_chegou;
    }

    public function getFilme(){
        return $this->filme;
    }

    public function getClassificacao(){
        return $this->classificacao;
    }
}