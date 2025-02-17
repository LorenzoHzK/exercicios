<?php

$par = [];
    for ($i = 1; $i <= 4; $i++){
        global $par;
       $num = readline("Insira algum valor: ");
        $impar = [];

    if ($num % 2 == 0){
    array_push ($par, $num);
    }
    elseif($num % 2 == 1){
        array_push ($impar, $num);
    }
    else{
        echo"Numero invalido \n";
    }


}
echo "O menor valor par e: ";
print_r(min($par));


// OU (MESMO RESULTADO COM CODIGO DIFERENTE) //

$par = [];
    $num1 = readline("Insira alguma valor: ");
    $num2 = readline("Insira alguma valor: ");
    $num3 = readline("Insira alguma valor: ");
    $num4 = readline("Insira alguma valor: ");

    if ($num1 % 2 == 0 || $num2 % 2 == 0 || $num3 % 2 == 0 || $num4 % 2 == 0){
    array_push ($par, $num1 , $num2, $num3 , $num4);
    }
    else{
        echo"Numero invalido \n";
    }


echo "O menor valor par e: ";
print_r(min($par));