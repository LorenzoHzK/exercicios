 <?php  
    $a = readline("Insira um valor: ");

    if ($a >= 30 && $a <= 90){
        echo "Esse número está entre 30 e 90";
    }
    else if($a > 120){
        echo "Esse número é maior que 120";
    }
    else{
        echo "Esse número não se encaixa nos parametros.";
    }