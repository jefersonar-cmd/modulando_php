<?php

include('array.php');
include('modulos.php');

echo "O maior salário: ". maior($funcionarios). "<br/><br/>";
$maior = maior($funcionarios);
$maiorMenor = maiorMenor($funcionarios);
echo "Área com Maior e Menor salário:<br/>";
for ($i = 0; $i < count($maiorMenor); $i++){
    echo "Área: ". $maiorMenor[$i]['area']. "<br/>Salário: R$". $maiorMenor[$i]['salario'] . "<br/><br/>";
}
$mulheres = maisMulheres($funcionarios);
echo "A área com mais mulheres contratadas:<br/>Área: ". $mulheres['area'] ."<br/>Quantidade: ". $mulheres['mulheres'] ."<br/><br/>";
echo "Quem ganha mais: ". ganhaMais($maior, $funcionarios);