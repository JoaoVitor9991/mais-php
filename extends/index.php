<?php

require_once 'pagamento.php';
require_once 'pix.php';
require_once 'cartao.php';

$pagar = new Pix(100);
echo $pagar->getTipo();

echo "<br>";
echo "<br>";

$cartao = new Cartao(100);
echo "Cartão paga: " . $cartao->getValorFinal();