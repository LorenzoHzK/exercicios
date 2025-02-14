<?php  
    $mercadoria = 1;
    $valor_total = 0;

    $valor_mer = readline("Qual é o valor de sua mercadoria: ");

    for ($i = 1; $i += $mercadoria; $i++){
        $valor_total += $valor_mer; 
        $mais_merca = readline("Mais mercadoria (S/N): ");

        if ($mais_merca == "s" || $mais_merca == "S" ){  
            $mercadoria ++;
            $valor_mer = readline("Qual é o valor da sua outra mercadoria: ");
        }
        else{
            break;
        }
    }

    echo "O valor total das mercadorias em estoque é: $valor_total \n";
    $media = $valor_total / $mercadoria;
    echo "A média de valor das suas mercadorias é: $media";