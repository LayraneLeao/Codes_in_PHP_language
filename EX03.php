<?php
/* Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 

Criadora: Layrane Dantas Pinheiro Leão*/

// Definindo a localidade e a codificação para UTF-8
setlocale(LC_ALL, 'pt_BR.UTF-8');

// Criando um loop para que ele possa fazer várias operações até que ele deseje finalizar o algoritimo.
do { 
  
// Criando um menu
echo "----------Opções Menu----------\n";
echo "\tDigite 1 para Soma;\n";
echo "\tDigite 2 para Subtração;\n";
echo "\tDigite 3 para Multiplicação;\n";
echo "\tDigite 4 para Divisão.\n";
echo "-------------------------------\n";

do{
$opcao = (int) readline ("\nQual opção você deseja? ");
if ($opcao != 1 && $opcao!= 2 && $opcao!= 3 && $opcao!=4) {
  echo "\nOpção Inválida!\nTente novamente ...\n";
}
} while ($opcao != 1 && $opcao!= 2 && $opcao!= 3 && $opcao!=4); // O usuário não conseguirá prosseguir caso não digite o número correto que consta no menu.

$numero01 = (float) readline ("Infome um número: ");
$numero02 = (float) readline ("Informe outro número: ");

switch ($opcao){

  // Soma
  case 1: {
    $soma = $numero01 + $numero02;
    echo "A soma de $numero01 + $numero02 é: ". number_format($soma, 2, ',', '.');
    break;
  }

  // Subtração
  case 2:{
    // Garantindo que o número não fique negativo, já que se eu diminuir um número menor pelo maior dará um resultado negativo
    if ($numero01 > $numero02){
      $subtracao = $numero01 - $numero02;
      echo "A subtração de $numero01 - $numero02 é: " . number_format($subtracao, 2, ',', '.');
    }
    else {
      $subtracao = $numero02 - $numero01;
      echo "A subtração de $numero02 - $numero01 é: " . number_format($subtracao, 2, ',', '.');
    }
    break;
  }

  // Multiplicação
  case 3: {
    $multiplicacao = $numero01 * $numero02;
    echo "A multiplicação de $numero01 * $numero02 é: " . number_format($multiplicacao, 2, ',', '.');
    break;
  }

  // Divisão
  case 4: {
    if ($numero01 > $numero02){
      $divisao = ($numero01 / $numero02);
      echo "A divisão de $numero01 / $numero02 é: " . number_format($divisao, 2, ',', '.');
    } else {
      $divisao = ($numero02 / $numero01);
      echo "A divisão de $numero02 / $numero01 é: ". number_format($divisao, 2, ',', '.');
    }
    break;
  }
}
  
// Pergunta para continuar ou não
do {
$continuar = (int) readline("\n\nDeseja continuar? (1-SIM ou 2-NÃO) ");
  if ($continuar != 1 && $continuar != 2) {
     echo "\nOpção Inválida!\nTente novamente ...\n";
  }
} while ($continuar != 1 && $continuar != 2);
  
} while ($continuar == 1); // Fim do repita, logo, o loop vai continuar sempre que o usuário digitar 1.

?>
