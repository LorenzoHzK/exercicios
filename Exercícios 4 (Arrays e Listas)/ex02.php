<?php
    function program(){
    $numeros = [];
        
    for ($i = 1; $i <= 10; $i++){
        $valor = readline("Insira um valor: ");
        array_push ($numeros, $valor);
    }

    $nega = 0;
    $posi = 0;
    $par = 0;
    $impar = 0;


    foreach ($numeros as $num) {
        if ($num < 0) {
            $nega++; 
        } elseif ($num > 0) {
            $posi++; 
        }
    
        if ($num % 2 == 0) {
            $par++; 
        } else {
            $impar++; 
        }
    }

    echo "Os numeros negativos são $nega \n";
    echo "Os numeros positivos são $posi \n";
    echo "Os numeros pares são $par \n";
    echo "Os numeros impares são $impar \n";

}

program();