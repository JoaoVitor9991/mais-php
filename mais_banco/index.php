<?php

require_once 'ContaBancaria.php';

$nova_conta = new ContaBancaria('João', '69',);
$nova_conta->depositar(100);
echo "<br>";
echo "<br>";
$nova_conta->sacar(120);
echo "<br>";
echo "<br>";
$nova_conta->sacar(88);
echo "<br>";
echo "<br>";
echo $nova_conta->ver_saldo();