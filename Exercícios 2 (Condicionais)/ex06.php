<?php 
    $a = readline ("Insira um valor: ");
    $b = readline ("Insira um outro valor: ");

    if ($a > $b){
        echo "O número $a é maior que $b";
    }
    else if ($b > $a){
        echo "O número $b é maior que $a";
    }
    else{
        echo "Os valores são iguais.";
    }