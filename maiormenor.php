<?php

function maiorMenor($a){
    $maior = $menor = 0;
    $areas = [];
    for ($i=0; $i < count($a); $i++) { 
        if($maior < $a[$i]['salario']){
            $maior = $menor = $a[$i]['salario'];
        }
    }
    for ($i=0; $i < count($a); $i++) { 
        if($menor > $a[$i]['salario']){
            $menor = $a[$i]['salario'];
        }
    }
    for ($i=0; $i < count($a); $i++) { 
        if($maior == $a[$i]['salario']){
            $areas[] = ['area' => $a[$i]['area'], 'salario' => $maior];
        }
    }
    for ($i=0; $i < count($a); $i++) { 
        if($menor == $a[$i]['salario']){
            $areas[] = ['area' => $a[$i]['area'], 'salario' => $menor];
        }
    }
    return $areas;
}