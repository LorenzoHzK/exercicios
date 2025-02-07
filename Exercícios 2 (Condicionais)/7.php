<?php 
    $a = readline("Insira a sua idade: ");

    if ($a >= 5 && $a <= 7){
        echo "Você se encaixa na categoria infantil A";
    }
    else if ($a >= 8 && $a <= 10){
        echo "Você se encaixa na categoria infantil B";
    }
    else if ($a >= 11 && $a <= 13){
        echo "Você se encaixa na categoria Juvenil A";
    }
    else if ($a >= 14 && $a <= 17){
        echo "Você se encaixa na categoria Juvenil B";
    }
    else if ($a >= 18){
        echo "Você se encaixa na categoria Sênior";
    }
    else {
        echo "Você não se encaixa em nenhuma categoria.";
    }