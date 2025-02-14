<?php
    $maior = 0;
    $menor = 9999999;
    for($i = 0; $i <= 999; $i++){
        $num = (int) readline("Forneça um valor: ");
        if($num != 0){
            if ($num > $maior){
             $maior = $num;
            }
            if ($num < $menor){
             $menor = $num;
            }
        }
        else {
            echo "O número zero foi informado, o sistema parou! \n";
            break;
        }
        
    }
    echo "O maior valor fornecido foi: $maior\n";
    echo "Já o menor valor fornecido foi: $menor\n";