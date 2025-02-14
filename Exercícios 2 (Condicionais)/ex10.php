<?php
    $a = readline("Valor do custo do produto: ");

    if($a <= 20){
        $b = $a *0.45;
        $c = $b + $a;
       echo "O valor do produto a ser vendido será de: $c"; 
    }
    else{
        $b = $a * 0.30;
        $c = $b + $a;
        echo "Valor do produto a ser vendido será: $c";
    }