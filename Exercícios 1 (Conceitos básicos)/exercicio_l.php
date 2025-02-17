<?php
    $conta = readline("Digite o número da conta (3 dígitos): ");
    $inverso = strrev($conta);
    $soma = $conta + $inverso;

    $resultado = 0;
    $total = strval($soma);

    for ($i = 0; $i < strlen($total); $i++) {
        $resultado += $total[$i] * ($i + 1);
    }

    echo "A soma e: $soma \n";
    echo "Dígito verificador: " . ($resultado % 10) . "\n"
?>