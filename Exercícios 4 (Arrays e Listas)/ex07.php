<?php  
    $mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    function data(){
        global $mes;
        $escolha = readline("Escolha um mês para ser mostrado na tela: ");
        
        if ($escolha <= 12 && $escolha > 0){
           // print_r(array_chunk($mes, 1));

            switch ($escolha){
                case 1:
                    print_r ($mes[0]);
                    break;
                case 2:
                    print_r ($mes[1]);
                    break;
                case 3:
                    print_r ($mes[2]);
                    break;
                case 4:
                    print_r ($mes[3]);
                    break;
                case 5:
                    print_r ($mes[4]);
                    break;
                case 6:
                    print_r ($mes[5]);
                    break;
                case 7:
                    print_r ($mes[6]);
                    break;
                case 8:
                    print_r ($mes[7]);
                    break;
                case 9:
                    print_r ($mes[8]);
                    break;
                case 10:
                    print_r ($mes[9]);
                    break;
                case 11:
                    print_r ($mes[10]);
                    break;  
                case 12:
                    print_r ($mes[11]);
                    break;
            }
        }
        else{
            echo "Número inválido";
        }
    }

    data();