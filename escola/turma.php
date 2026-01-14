<?php

require_once 'aluno.php';

class Turma {
    private $matriculas = [];

    public function matricular(Aluno $nome_chegou)
    {
        $this->matriculas [] = $nome_chegou;
    }
}