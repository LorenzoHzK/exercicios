<?php
    $menor = 0;
    $arr = [];
    for ($i = 0; $i <= 10; $i++){
        $num = (int) readline("Tentativa $i | Insira um valor, podendo ser negativo ou não:");
        if ($num < 0){
            $menor = $num;
            array_push($arr, $menor);
        }
    }
    print_r($arr);