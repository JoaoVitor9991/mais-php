<?php

require_once 'bilheteria.php';
require_once 'bilheteriavip.php';
require_once 'filme.php';

$filmeDoDia = new Filme("Homem-aranha", 12);
$cinema = new Bilheteria($filmeDoDia);
$cinema->receber_dinheiro(40.00);
 echo "<br>";
$cinema->imprimir_bilhete();
 echo "<br>";
 $cinema->imprimir_bilhete();
echo "<br>";


 $cinema3 = new Bilheteria($filmeDoDia);
 echo "<br>";
$cinema3->receber_dinheiro(2.00);
echo "<br>";
$cinema3->imprimir_bilhete();
echo "<br>";
$cinema4 = new Bilheteria($filmeDoDia);
echo "<br>";
$cinema4->receber_dinheiro(10);
echo "<br>";
$cinema4->imprimir_bilhete();
echo "<br>";
$cinema4->receber_dinheiro(10);
echo "<br>";
$cinema4->imprimir_bilhete();
echo "<br>";
$cinema4->imprimir_bilhete();
echo "<br>";

$vip = new Bilheteriavip($filmeDoDia);
echo "<br>";
$vip->receber_dinheiro(50);
echo "<br>";
$vip->imprimir_bilhete();
echo "<br>";
echo "<br>";


$cinema6 = new Bilheteria($filmeDoDia);

$cinema6->receber_dinheiro(20.00);
$cinema6->imprimir_bilhete();


