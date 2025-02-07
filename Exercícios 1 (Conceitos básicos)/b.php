<?php 
    echo "Quantas pessoas beberam 1 copo de chopp? ";
    $a = readline();

    echo "Quantas pessoas beberam 2 copos de chopp? ";
    $b = readline();

    echo "Quantas pessoas beberam 3 copos de chopp? ";
    $c = readline();

    echo "Quantas pessoas beberam 4 copos de chopp? ";
    $d = readline();

    if ($res = ($a + ($b * 2) + ($c * 3) + ($d * 4)) / 10){
        echo "O total de copos de chopp é: $res\n";
    }
    else{
        echo "Todo mundo deu PT e não conseguiram saber o resultado";
    }