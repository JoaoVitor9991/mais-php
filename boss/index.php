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