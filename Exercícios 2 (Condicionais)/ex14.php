<?php 
    $trab_hora = readline("Quantas horas foram trabalhadas ao total no mes: ");
    $sal_hora = (float) readline("Salario que voce recebe por hora: ");

    if ($trab_hora > 160){
        $extra = $trab_hora - 160;
        $total_extra = $extra * ($sal_hora  * 1.50);
        $valor_total = (160 * $sal_hora) + $total_extra;
        echo "Valor total do seu salario com horas extras: R$ $valor_total \n";
    }
    elseif ($trab_hora < 160){ 
        $valor = $trab_hora * $sal_hora; 
        $desconto = $valor * 0.05; 
        $valor -= $desconto;
        echo "Valor total do seu salario e:R$ $valor"; 
    }
    else{
        $valor_total = $trab_hora * $sal_hora;
        echo "Valor total do seu salario e:R$ $valor_total"; 
    }