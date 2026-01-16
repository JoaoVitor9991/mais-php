<?php

require_once 'aluno.php';
require_once 'turma.php';

$turma1 = new Turma();
$joao = new Aluno ("Joao", 10);
$maria = new Aluno ("Maria", 6.5);
$jose = new Aluno ("José", 10);

$turma1->matricular($joao);
$turma1->matricular($maria);
$turma1->matricular($jose);

echo  $turma1->listarAprovados();
echo "<br>";
echo $turma1->somarMediaSala();
