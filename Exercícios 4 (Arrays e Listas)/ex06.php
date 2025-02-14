<?php

    $arr_a = [];

    function program(){
        global $arr_a;

        for ($i = 0; $i <= 10; $i++){
            $numeros = readline("$i Insira alguns valores: ");

            array_push($arr_a, $numeros);
        }
    }
    
    $arr_b = [];

    function program2(){
        global $arr_b;

        echo "Insira alguns outros valores para a multiplicação \n";
        for ($i = 0; $i <= 10; $i++){
            $numeros = readline("$i Insira alguns valores: ");

            array_push($arr_b, $numeros);
        }
    }

    function program3(){
        global  $arr_a, $arr_b;

        for ($i = 0; $i <= 10; $i++){
            $res = $arr_a [$i] * $arr_b [$i];
            echo " posição $i  = $res \n";
        }    
    }

program();
program2();
program3();