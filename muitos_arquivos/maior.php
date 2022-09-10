<?php

// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function maiorSal($a){
    // aqui armazena todos os salários em um array separado
    for ($i=0; $i < count($a); $i++) { 
        $array[] = $a[$i]['salario'];
    }
    $maior = 0;
    // aqui ele verifica qual salário é o maior dentro do array
    for ($i=0; $i < count($array); $i++) { 
        if ($maior < $array[$i]){
            $maior = $array[$i];
        }
    }
    // aqui irá retornar o resultado do for anterior
    return $maior;
}