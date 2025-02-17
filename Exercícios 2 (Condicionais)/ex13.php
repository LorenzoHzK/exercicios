<?php
    $inicio = (int) readline("Horario de inicio da partida: ");
    $fim = (int)  readline("Horario que finalizou a partida: ");

    if ($fim >= $inicio){
        $resultado = $fim - $inicio;
        echo "$resultado";
    }
    elseif($fim < $inicio){
        $resultado = (24 - $inicio) + $fim;
        echo "$resultado";
    }
    else {
        echo "Valores invalidos";
    }