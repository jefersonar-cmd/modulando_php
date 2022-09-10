<?php
// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function maisMulheres($a){
    $areas = $qtd = [];
    // separa as áreas de atuação
    for ($ia=0; $ia < count($a); $ia++) { 
        if(count($areas) > 0){
            if(in_array($a[$ia]['area'], $areas)){

            }else{
                $areas[] = $a[$ia]['area'];
            }
        }else{
            $areas[] = $a[$ia]['area'];
        }
    }
    // conta quantidade de mulheres por área
    for ($i=0; $i < count($areas); $i++) { 
        $f = 0;
        for ($ia=0; $ia < count($a); $ia++) { 
            if($areas[$i] == $a[$ia]['area']){
                if ($a[$ia]['genero'] == 'F'){
                    $f ++;
                }
            }
        }
        // armazena os dados do for dentro do array qtd
        $qtd[] = ['area' => $areas[$i], 'mulheres' => $f];
    }
    // retorna área com mais mulheres
    $maior = $posi = 0;
    for ($i=0; $i < count($qtd); $i++) { 
        if($maior < $qtd[$i]['mulheres']){
            $maior = $qtd[$i]['mulheres'];
            $posi = $i;
        }
    }
    // retorna o array resultante
    return $qtd[$posi];
}

// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function maiorMenor($a){
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

// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function maior($a){
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


// função irá receber os dados armazendos dentro da variável $A e $B
// e dentro dela será tratado esses dados
function ganhaMais($a, $b){
    // declara uma variável que recebe uma string vazia
    $ganha = '';
    // for que verifica qual gênero recebe mais
    for ($i=0; $i < count($b); $i++) { 
        if($a == $b[$i]['salario']){
            if($b[$i]['genero'] == 'F'){
                $ganha = 'Mulher';
            }else{
                $ganha = 'Homem';
            }
        }
    }
    // retorna a variável string com o resultado
    return $ganha;
}