<?php
// função irá receber os dados armazendos dentro da variável $A
// e dentro dela será tratado esses dados
function comMaisMulheres($a){
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