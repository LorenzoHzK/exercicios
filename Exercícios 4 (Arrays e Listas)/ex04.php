<?php

    $arr = [];  
    $num = '0';



    function program(){
        global $arr;

        for ($i = 0; $i <= 10; $i++){
            $numeros = readline("$i Insira alguns valores: ");

            array_push($arr, $numeros);
        }

        print_r ($arr);
    }



    function program_b(){
        global $arr, $num;

        $r = new \Random\Randomizer();

        $num = implode(', ', $r->pickArrayKeys($arr, 1));

        if ($num > 0){
            echo "O número pego foi: $num \n";
        }
        else{
            return program_b();
        }
        

    }

    
    $arr_c = [];

    function program_c(){
        global $arr, $arr_c, $num;

        for ($i = 0; $i <=10; $i++){
            $valor = $arr[$i] * $num;

            array_push ($arr_c, $valor);
        }
        print_r($arr_c);
    }
    

    program();
    program_b();
    program_c();