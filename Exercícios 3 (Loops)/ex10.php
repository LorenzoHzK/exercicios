<?php
    $num = 1;
    $res = 1;
    while ($res <= 100) {
        echo"Tabuada do $num \n";
        for ($i = 1; $i <=10.; $i++){
            $res = $num * $i;
            echo "$num x $i = $res \n";
        }
        $num ++;
        if ($res == 100){
            break;
        }
        else{
            continue;
        }
    }