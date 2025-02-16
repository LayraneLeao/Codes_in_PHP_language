<?php
/*
  Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é
  divisível por nenhum destes

  Criadora: Layrane Dantas Pinheiro Leão
*/

$numero = (float) readline ("Informe um número: ");

/*
  Estou utilizando um contador para que, caso o número não seja divisível 
  por nenhuma das operações, apareca um alerta para o usuário.
*/
$contador = 0; 

// Divisão por 10
if (fmod($numero, 10) == 0){
  $divisao = $numero / 10;
  echo "O resultado de {$numero} / 10 é: {$divisao}" . PHP_EOL;
  $contador ++;
}

// Divisão por 5
if (fmod($numero, 5) == 0){
  $divisao = $numero / 5;
  echo "O resultado de {$numero} / 5 é: {$divisao}" . PHP_EOL;
  $contador ++;
}

// Divisão por 2
if(fmod($numero, 2) == 0){
  $divisao = $numero / 2;
  echo "O resultado de {$numero} / 2 é: {$divisao}" . PHP_EOL;
  $contador ++;
}

// !Divisível
if ($contador == 0){
  echo "\n{$numero} não é divisível por 2, 5 e nem por 10!" . PHP_EOL;
}
