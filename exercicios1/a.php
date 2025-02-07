<?php 
    echo "Insira um dividendo: ";
    $a = readline();

    echo "Insira um divisor: ";
    $b = readline();
    
    if($res = $a / $b){
        echo "O Valor da divisão é: $res\n";
        echo "O resto é: ". $a % $b;
    }
    else{
        echo "Não foi possivel realizar essa operação";
    }