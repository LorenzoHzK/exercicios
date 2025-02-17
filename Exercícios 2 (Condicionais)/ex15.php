<?php 
    $salario = readline("Seu salario fixo no mes e: ");
    $vendas = readline("valor das vendas que foram efetuados no mes: ");

    if($vendas > 1500){
        $comissao = 1500 * 0.03;
        $vendas = ($vendas - 1500) * 0.05;
        $total = $vendas + $salario + $comissao;
        echo "Seu salario e de: R$ $total";
    }
    else{
        $comissao = $vendas * 0.03;
        $total = $salario + $comissao;
        echo "Seu salario e de: R$ $total";
    }