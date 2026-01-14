<?php

class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome_chegou, $nota_chegou)
    {
        $this->nome = $nome_chegou;
        $this->nota = $nota_chegou;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNota()
    {
        return $this->nota;
    }
}