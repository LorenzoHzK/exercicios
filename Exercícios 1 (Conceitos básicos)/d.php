<?php 
    echo "Valor salário mínimo: ";
    $sal = readline();

    echo "Quantidade de Quilowatts: ";
    $watts = readline();

    $res = ($sal / 7) * $watts;

    if ($res) {
        echo "Valor a ser pago: " , $res;
    } else {
        echo "Erro";
    }

// watts x (7/1518) | watts x 216