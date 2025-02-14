<?php
    $nota_1 = readline ("Insira sua nota: ");
    $nota_2 = readline ("Insira sua nota: ");
    for($i = 0; $i <= 10; $i++){
        if ($nota_1 > 0){
            $total = $nota_1 + $nota_2;
            $total = $total / 2;
    }
}
    echo "A média das suas notas é: $total \n";

    $escolha = readline("deseja que um novo calculo seja feito: ");
        if ($escolha == "S" || $escolha == "s"){
        $total = $nota_1 + $nota_2;
        $total = $total / 2;
        echo "A conta foi refeita e a média é: $total \n";
        }
        else {
            echo "O calculo não será refeito.";
        }