<?php

require_once 'bilheteria.php';

$cinema = new Bilheteria();
$cinema->receber_dinheiro(20.00);
 echo "<br>";
$cinema->imprimir_bilhete();
 echo "<br>";
 $cinema3 = new Bilheteria();
 echo "<br>";
$cinema3->receber_dinheiro(2.00);
echo "<br>";
$cinema3->imprimir_bilhete();
