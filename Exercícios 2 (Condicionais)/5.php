<?php
    $a = readline("Informe o ano em que você nasceu: ");

    $b = 2025 - $a;

    if ($b >= 18){
        echo "Já pode tirar a habilitação, parabéns!";
    }
    else if ($b >= 16) {
        echo "Você pode votar parabénsb";
    }
    else {
        echo "Você não pode nem votar nem retirar sua carteira, sua idade é: $b";
    }