<?php
    function multi(){
        $arr = [];
        for ($i = 0; $i <= 10; $i++){
            $num = 5 * $i;
            array_push ($arr , $num);
            
        }
        print_r ($arr);
    }

multi();