<?php
$nome = readline ("Infome seu nome: ");
$valorCompra = (double) readline ("Qual valor da sua compra? ");

// Compras sem desconto
if ($valorCompra <=300){
  echo "\n$nome bem vindo(a) a nossa loja!\nValor final da sua compra: R$" . number_format ($valorCompra, 2,',', '.') . "\n";
}

// 5% de desconto
if ($valorCompra > 300 && $valorCompra<=500){
  $desconto = $valorCompra * 0.05;
  $valorComDesconto = $valorCompra - $desconto;

  echo "\nParabéns $nome, você ganhou 5% de desconto nas suas compras!\nCompras com desconto: R$:" . number_format($valorComDesconto, 2, ',', '.') . ".\n";
}

// 10% de desconto
if ($valorCompra >=501 && $valorCompra<=1000){
  $desconto = $valorCompra * 0.10;
  $valorComDesconto = $valorCompra - $desconto;

  echo "\nParabéns $nome, você ganhou 10% de desconto nas suas compras!\nCompras com desconto R$:" . number_format($valorComDesconto, 2 , ',', '.') . ".\n";
}

// 15% de desconto
if ($valorCompra > 1001){
  $desconto = $valorCompra * 0.15;
  $valorComDesconto = $valorCompra - $desconto;

  echo "\nParabéns $nome, você ganhou 15% de desconto nas suas compras!\nCompras com desconto R$:" . number_format($valorComDesconto, 2 ,',', '.') . ".\n";
}

?>
