<?php

function maior($a){
    for ($i=0; $i < count($a); $i++) { 
        $array[] = $a[$i]['salario'];
    }
    $maior = 0;
    for ($i=0; $i < count($array); $i++) { 
        if ($maior < $array[$i]){
            $maior = $array[$i];
        }
    }
    return $maior;
}