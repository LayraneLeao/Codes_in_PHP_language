<?php
/*
  Construir um algoritmo que leia 2 números e
  efetue a adição. Caso o valor somado seja
  maior que 20, este deverá ser apresentando
  somando-se a ele mais 8; caso o valor
  somado seja menor ou igual a 20, este deverá
  ser apresentado subtraindo-se 5
  
  Criadora: Layrane Dantas Pinheiro Leão
*/

$numero01 = (int) readline ("Informe um número: ");
$numero02 = (int) readline ("Informe outro número: ");

$soma = $numero01 + $numero02;

if ($soma > 20){
  $soma += 8;
  echo "O resultado de {$numero01} + {$numero02} + 8 é: {$soma}";
}
if ($soma <=20){
  $soma -= 5;
  echo "O resultado de {$numero01} + {$numero02} - 5 é: {$soma}";
}
