<?php

require_once 'aluno.php';

class Turma {
    private $matriculas = [];

    public function matricular(Aluno $nome_chegou)
    {
        $this->matriculas [] = $nome_chegou;
    }


    public function somarMediaSala()
    {
        $soma = 0;

        foreach ($this->matriculas as $aluno) {
            $soma = $soma + $aluno->getNota();
        }

        $quantidade_alunos = count($this->matriculas);

        $media = $soma / $quantidade_alunos;

        echo "A média da turma é: " . $media;
    }

    public function listarAprovados()
    {
        
        foreach($this->matriculas as $alunos) {
            if($alunos->getNota() >= 7) {
                echo "<br>";
                echo "Aluno Aprovado!!!! " . $alunos->getNome() . "<br>"; 
            }
        }
    }
}