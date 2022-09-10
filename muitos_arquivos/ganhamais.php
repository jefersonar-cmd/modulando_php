<?php
// função irá receber os dados armazendos dentro da variável $A e $B
// e dentro dela será tratado esses dados
function quemGanhaMais($a, $b){
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