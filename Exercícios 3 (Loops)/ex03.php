<?php
    $a = 1;
    $c = 0;
    for($a; $a <= 10; $a++){
        $b = readline("Insira um valor inteiro: ");

        if ($b != 0){
            $c = $c + $b;
        }
        else{
            echo"Forneça valores diferentes de 0 \n";
            break; 
        }
    }
    echo "A soma total destes valores é: $c \n";
    $d = $c / $a;
    echo "A média é: $d \n";
    echo "Foram lidos $a números";