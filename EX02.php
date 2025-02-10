<?php
// Reescrevendo meu código C para PHP

/* Regra de negócio 1: Desconto para clientes fiéis.
  Enunciado: Clientes que fizeram mais de 5 compras nos últimos 6 meses têm direito a um desconto de 10% no valor total da próxima compra.


  Regra de negócio 2: Limite de crédito para novos clientes.
  Enunciado: Novos clientes têm um limite de crédito de R$ 500, ou seja, não podem fazer compras com valor total superior a esse limite até que completem 3 meses como clientes ativos.


  Tarefa: Criar um algoritmo em linguagem C que use essas duas regras de negócio para calcular o valor final de uma compra de um cliente, aplicando ou não o desconto de cliente fiel e verificando se um novo cliente ultrapassou o limite de crédito.

  Criadora: Layrane Dantas Pinheiro Leão
  */

$nome = readline ("Qual seu nome? ");

do {
    $opcao = (int) readline ("Você é um novo cliente? (1-SIM/ 2-NÃO) ");

    if ($opcao != 1 && $opcao != 2){
        echo "\nOpção inválida!Tente novamente...\n";
    }
} while ($opcao!= 1 && $opcao != 2); // Se a pessoa digitou uma opção inválida, estou permitindo a ele que volte e digite a opção correta, ele só sairá deste loop quando digitar 1 ou 2.

switch ($opcao){
    case 1: {
        // Se a pessoa digitar 1 porque ele é um novo cliente, então entra pra regra 2
        // Como ele é um novo cliente, significa que não tem mais de 3 meses de compras, logo, só pergunto a ele o valor de sua compra
        $totalCompras = (double) readline ("Qual valor da sua compras? ");

        if ($totalCompras > 500){
            echo "\n$nome, infelizmente você atingiu seu limite de compra!\nVocê só poderá fazer compras superiores a 500 reais quando completar 3 meses de compras ativas na nossa loja.\n";
        } else {
            echo "\n$nome, obrigada pela sua visita a loja!\nSaldo da sua compra: R$". number_format($totalCompras, 2, ',', '.') . "\n";
        }
        break;
    }

    case 2: {
        // Se a pessoa digitar 2 é porque ele não é um novo cliente, logo ele pode ter feito mais de 5 compras nos últimos 6 meses
        // Então entra pra regra 1
        $compras = (int) readline ("Quantas vezes você efetuou uma compra nos ultimos 6 meses? ");
        $totalCompras = (double) readline ("Qual valor da sua compras? ");
        if ($compras > 5){
            $desconto = $totalCompras * 0.10;
            $precoFinal = $totalCompras - $desconto;
            echo "\nParabéns $nome, você ganhou 10%% de desconto!\nSua compra com desconto:R$" .number_format($precoFinal, 2,',' , '.') . "\n";
        } else {
            echo "\n$nome, obrigada pela sua visita a loja!\nSaldo da sua compra: R$". number_format($totalCompras, 2, ',', '.') . "\n";
        }
        break; 
    }
}
?>
