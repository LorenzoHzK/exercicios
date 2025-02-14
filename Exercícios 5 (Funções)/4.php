<?php
    $temp = readline("Escreva a temperatura: ");
    $unidade_atual = readline("Escreva a unidade atual de temp: ");
    $unidade_deseja = readline("Escreva a unidade desejada: ");
    escolha();

    function escolha(){
        global $temp, $unidade_atual;
        if ($unidade_atual == "G" || $unidade_atual == "G" ){
            graus();
        }
        else if ($unidade_atual == "F" || $unidade_atual == "f"){
            farenheit();
        }
        else if ($unidade_atual == "K" || $unidade_atual == "k"){
            Kelvin();
        }
    }

    function graus(){
        global $temp, $unidade_deseja;

        if($unidade_deseja == "F" || $unidade_deseja == "f" ){
            $res = $temp * 1.8 + 32;
            echo "$res Farenheit";
        }
        else if ($unidade_deseja == "K" || $unidade_deseja == "k"){
            $res = $temp + 273;
            echo "$res Kelvin";
        }
        else {
            echo "função inválida";
        }
    }


    function farenheit(){
        global $temp, $unidade_deseja;

        if($unidade_deseja == "G" || $unidade_deseja == "G" ){
            $res = 5/9 * ($temp - 32);
            echo "$res Graus";
        }
        else if ($unidade_deseja == "K" || $unidade_deseja == "k"){
            $res = ($temp - 32) * 5/9 + 273.15;
            echo "$res Kelvin";
        }
        else {
            echo "função inválida";
        }
    }


    function Kelvin(){
        global $temp, $unidade_deseja;

        if($unidade_deseja == "G" || $unidade_deseja == "g" ){
            $res = $temp - 273.15;
            echo "$res Graus";
        }
        else if ($unidade_deseja == "K" || $unidade_deseja == "k"){
            $res = ($temp - 273.15) * 1.8000+ 32.00;
            echo "$res Fahrenheit";
        }
        else {
            echo "função inválida";
        }
    }