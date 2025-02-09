<?php   
    $a = readline ("Valor do produto: ");
    $b = readline ("Insira o código: ");

    if ($b == 1){
        $c = $a * 0.10;
        $d = $a - $c;
        echo "$d";
    }
    else if ($b == 2){
        $c = $a * 0.05;
        $d = $a - $c;
        echo "$d";
    }
    else if ($b == 3){
        echo "$a";
    }
    else if ($b == 4){
        $c = $a * 0.10;
        $d = $a + $c;
        echo "$d";
    }
    else {
        echo "Não se encaixa em nenhum.";
    }