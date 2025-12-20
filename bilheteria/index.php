<?php

require_once 'bilheteria.php';
require_once 'bilheteriavip.php';

$cinema = new Bilheteria();
$cinema->receber_dinheiro(40.00);
 echo "<br>";
$cinema->imprimir_bilhete();
 echo "<br>";
 $cinema->imprimir_bilhete();
echo "<br>";


 $cinema3 = new Bilheteria();
 echo "<br>";
$cinema3->receber_dinheiro(2.00);
echo "<br>";
$cinema3->imprimir_bilhete();
echo "<br>";
$cinema4 = new Bilheteria();
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

$vip = new Bilheteriavip();
echo "<br>";
$vip->receber_dinheiro(50);
echo "<br>";
$vip->imprimir_bilhete();



