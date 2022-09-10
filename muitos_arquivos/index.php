<?php
// chama todos os arquivos php com suas funções
include('maior.php');
include('array.php');
include('maiormenor.php');
include('maismulher.php');
include('ganhamais.php');
echo "O maior salário: ". maior($funcionarios). "<br/><br/>";
$maior = maiorSal($funcionarios);
$maiorMenor = maiorMenorSal($funcionarios);
echo "Área com Maior e Menor salário:<br/>";
for ($i = 0; $i < count($maiorMenor); $i++){
    echo "Área: ". $maiorMenor[$i]['area']. "<br/>Salário: R$". $maiorMenor[$i]['salario'] . "<br/><br/>";
}
$mulheres = comMaisMulheres($funcionarios);
echo "A área com mais mulheres contratadas:<br/>Área: ". $mulheres['area'] ."<br/>Quantidade: ". $mulheres['mulheres'] ."<br/><br/>";
echo "Quem ganha mais: ". quemGanhaMais($maior, $funcionarios);