<?php

require_once 'patio.php';
require_once 'veiculo.php';

$patio = new Patio();
$ferrari = new Veiculo("Veiculo", "RED-1234");
$fusca = new Veiculo("Fusca", "AZUL-9999");

$patio->entrar($ferrari);
$patio->entrar($fusca);

echo $patio->buscar("RED-1234");
echo "<br>";
echo "<br>";
echo $patio->buscar("RED-12344");

$patio1 = new Patio();
$civic = new Veiculo("Civic", "AMA-6969");

$patio1->entrar($civic);
echo "<br>";
echo "<br>";
echo $patio1->sair("AMA-6969");
echo "<br>";
echo "<br>";
echo $patio1->sair("AMA-6969");