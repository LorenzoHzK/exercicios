<?php
    echo "Insira o valor do produto: ";
    $a = readline();

    $b = $a *0.01;

    if ($res = $b + $a){
        echo "o valor é $res";
    }
    else{
        echo "Não foi possivel realizar essa operação";
    }