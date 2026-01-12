<?php
require_once 'carrinho.php';
require_once 'produto.php';

$produto1 = new Produto("Mouse", 200);
$produto2 = new Produto("Teclado", 1200);
$produto3 = new Produto("Fone", 3200);
$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);
$carrinho->adicionar($produto3);
$carrinho->exibirTotal();
