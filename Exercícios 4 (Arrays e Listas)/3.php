<?php  
    $arr = array (10);

    function program(){
    global $arr;
    for ($i = 1; $i <= 10; $i ++){
        $numeros = readline("Insira um valor $i: ");
        if ($numeros > 0){
            array_push($arr, $numeros);
        }
        else {
            echo "Apenas valores positivos \n";
        }


    }
    echo "O maior valor é: ";
    print_r (max($arr));
    echo "\n";

    $maximo = (max($arr));

    echo "A posição deste valor é: ";
    print_r (array_keys($arr, $maximo));
}

program();