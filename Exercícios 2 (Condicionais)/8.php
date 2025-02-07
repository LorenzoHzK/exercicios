<?php   
    $a = readline ("Valor do produto: ");
    $b = readline ("Insira o código: ");

    if ($b == 1){
        $c = $a * 0.10;
        $d = $c - $b;
        echo "O valor é: $d";
    }
    else if ($b == 2){
        $c = $a * 0.05;
        $d = $c - $b;
        echo "O valor é: $d";
    }
    else {
        echo "Não se encaixa em nenhum.";
    }