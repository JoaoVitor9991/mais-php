<?php

require_once 'maquina.php';

echo "<h2>🛒 Testando a Máquina</h2>";

$minha_maquina = new MaquinaDeRefri();

$minha_maquina->comprar();
echo "<hr>";

$minha_maquina->inserir_dinheiro(2,00);
$minha_maquina->inserir_dinheiro(3,00);
$minha_maquina->comprar();