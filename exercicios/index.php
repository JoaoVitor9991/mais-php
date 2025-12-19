<?php

require_once 'Titular.php';
require_once 'Conta.php';
require_once 'Tributavel.php';
require_once 'ContaCorrente.php';
require_once 'SeguroDeVida.php';

echo "<h1>🏦 Banco Malvadão</h1>";


$joao = new Titular("João Vitor", "123.456.789-10");
echo "Cliente criado: " . $joao->get_nome() . "<br><br>";


$cc = new ContaCorrente($joao);
$cc->depositar(1000);
echo "Depositei 1000. Saldo atual: R$ " . $cc->ver_saldo() . "<br>";


echo "Tentando sacar 100 reais...<br>";
$cc->sacar(100);
echo "Saldo pós-saque (esperado 897.50): R$ " . $cc->ver_saldo() . "<br><br>";


$seguro = new SeguroDeVida();

echo "<h3>💸 Hora de pagar o Leão</h3>";
echo "Imposto da Conta (1% do saldo): R$ " . $cc->calcular_imposto() . "<br>";
echo "Imposto do Seguro (Fixo 50): R$ " . $seguro->calcular_imposto() . "<br>";