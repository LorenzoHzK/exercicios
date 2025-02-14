<?php  

    $valor_total = 0;
    $total_merca = 0;

    $total_merca = readline("Qual é o total de mercadorias no seu estoque: ");

    for ($i = 1; $i <= $total_merca; $i++){
        $valor_mer = readline("Qual é o valor de suas mercadorias: ");
        $valor_total += $valor_mer; 
    }

    echo "O valor total das mercadorias em estoque é: $valor_total \n";

    $media = $valor_total / $total_merca;
    echo "A média de valor das suas mercadorias é: $media";