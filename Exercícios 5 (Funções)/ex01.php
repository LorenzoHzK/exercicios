<?php
    
    $val1 = 0;
    $val2 = 0;

    echo "Escolha entre um das opções <br> 
    1 - soma
    2 - subtração
    3 - divisão
    4 - multiplicação \n";
    $escolha = readline("Escolha entre uma das opções: ");    
    $val1 = readline("Insira um valor: ");    
    $val2 = readline("Insira um outro valor: ");    


    function soma($val1, $val2){
        $res = $val1 + $val2;
        echo "Resultado: $res\n";
    }

    
    function menos($val1, $val2){
        $res = $val1 - $val2;
        echo "Resultado: $res\n";
    }

    
    function divisao($val1, $val2){
        if($val2 == 0){
            echo "Não foi possível dividir";
        }
        $res = $val1 / $val2;
        echo "Resultado: $res\n";
    }

    
    function multiplicacao($val1, $val2){
        $res = $val1 * $val2;
        echo "Resultado: $res\n";
    }

    if ($escolha == 1){
        soma($val1, $val2);
    }
    else if ($escolha == 2){
        menos($val1, $val2);
    }
    else if ($escolha == 3){
        divisao($val1, $val2);
    }
    else if ($escolha == 4){
        multiplicacao($val1, $val2);
    }
    else {
        echo "Opção inválida!\n";
    }