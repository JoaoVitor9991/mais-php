<?php

class Titular {
    private $nome;
    private $cpf;


    public function __construct($nome_titular, $cpf_titular)
    {
        $this->nome = $nome_titular;
        $this->cpf = $cpf_titular;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function get_cpf()
    {
        return $this->cpf;
    }
}