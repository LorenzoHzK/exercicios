<?php
    $arr = [];

    $num1 = readline("Forneça um número: ");
    $num2 = readline("Forneça um outro número: ");
    $num3 = readline("Forneça um mais um número: ");
    $num4 = readline("E por fim forneça um número forneça um número: ");
    
    function maior(){
        global $arr, $num1, $num2, $num3, $num4;

        array_push ($arr, $num1, $num2, $num3, $num4);
        $maior_num = max($arr);
        echo "$maior_num";
    }

maior();