<?php
    $a = 1;
    $c = 0;
    for($a; $a <= 10; $a++){
        $b = readline("Insira um valor inteiro: ");
        $c = $c + $b;
    }
    echo "A soma total destes valores é: $c \n";
    $d = $c / 10;
    echo "A média é: $d";