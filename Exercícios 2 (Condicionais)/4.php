<?php
    $a = readline("Insira sua primeira nota: ");
    $b = readline("Insira sua segunda nota: ");

    $c = ($a + $b) / 2;

    if ($c >= 60){
        echo "Só tenho duas palavras para dizer para-béns. Sua noita foi: $c";
    }
    else{
        echo "Você foi reprovado :(";
    }