<?php

    $arr = []; 



    function program(){
        global $arr;

        for ($i = 0; $i <= 10; $i++){
            $numeros = readline("$i Insira alguns valores: ");

            array_push($arr, $numeros);
        }

        print_r ($arr);
        $inverso = array_reverse($arr);
        print_r($inverso);
    }

    program();