<?php
// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function maiorMenorSal($a){
    // declarando variáveis de apoio
    $maior = $menor = 0;
    $areas = [];
    // for para separar o maior maior
    for ($i=0; $i < count($a); $i++) { 
        if($maior < $a[$i]['salario']){
            $maior = $menor = $a[$i]['salario'];
        }
    }
    // for para separar o menor salário
    for ($i=0; $i < count($a); $i++) { 
        if($menor > $a[$i]['salario']){
            $menor = $a[$i]['salario'];
        }
    }
    // for para armazenar o nome da área e o valor do maior salário no array
    for ($i=0; $i < count($a); $i++) { 
        if($maior == $a[$i]['salario']){
            $areas[] = ['area' => $a[$i]['area'], 'salario' => $maior];
        }
    }
    // for para armazenar o nome da área e o valor do maior salário no array
    for ($i=0; $i < count($a); $i++) { 
        if($menor == $a[$i]['salario']){
            $areas[] = ['area' => $a[$i]['area'], 'salario' => $menor];
        }
    }
    // retorna o resultado do array
    return $areas;
}