<?php
    function a(){
        $num = (int) readline("insira um valor inteiro: ");

        if ($num % 4 == 0){
            echo"esse número é divisivel por 4, VERDADEIRO";
        }
        else{
            echo "Esse número não é divisivel por 4, FALSE";
        }
    }



    function b(){
        $num = (int) readline("insira um número: ");

        if ($num % 2 == 0){
            echo"esse número é par, VERDADEIRO";
        }
        else{
            echo "Esse número é ímpar, FALSE";
        }
    }
    

    function c(){
            $num1 = (int) readline("Insira um valor: ");
            $num2 = (int) readline("Insira um valor: ");

            if ($num1 > $num2) [$num1, $num2] = [$num2, $num1];

            $soma = 0;
            for ($i = $num1 + 1; $i < $num2; $i++) {
                $soma += $i;
            }

            echo $soma;
        }


        function d(){
            $a = (int) readline("Insira um valor para A: ");
            $b = (int) readline("Insira um valor para B: ");
            $c = (int) readline("Insira um valor para C: ");

            if ($a > 1);{
                $soma = 0;
                for ($i = $b + 2; $i < $c; $i++) {
                    $soma += $i;
                }
                if($soma % $a == 0){
                    echo "O total é $soma";
                }
                else {
                    echo "Não é possível dividir";
                }
            }
        }


        function e(){
            $altura = readline ("Seu peso em Centimetros:");
            $escolha = readline ("Escolha o sexo: (M/F) ");

            if ($escolha == "M" || $escolha == "m"){
                $resultado = 72.7 * $altura - 58;
                echo "O seu peso ideal e $resultado";
            }
        else if($escolha == "F" || $escolha == "f"){
        $resultado = 62.1 * $altura - 44.7;
        echo "O seu peso ideal e $resultado";
        }
    else{
        echo "Opção inválida";
    }
}