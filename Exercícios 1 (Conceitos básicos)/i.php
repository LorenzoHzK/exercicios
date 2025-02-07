<?php
    $a = readline ("Número de carros vendidos: ");
    $b = readline ("Valor total das vendas: ");
    $c = readline ("Salário fixo mensal: ");
    $d = readline ("Valor da comissão pelo veículos: ");

    $e = $c + ($d * $a) + ($b * 0.05);
    echo "Seu salário total é de: $e";