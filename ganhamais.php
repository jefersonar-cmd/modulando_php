<?php
function ganhaMais($a, $b){
    $ganha = '';
    for ($i=0; $i < count($b); $i++) { 
        if($a == $b[$i]['salario']){
            if($b[$i]['genero'] == 'F'){
                $ganha = 'Mulher';
            }else{
                $ganha = 'Homem';
            }
        }
    }
    return $ganha;
}