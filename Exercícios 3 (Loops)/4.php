<?php
    $a = 0;
    $b = 0;
    for ($i = 50; $i <= 70; $i ++){
        if ($i % 2 == 0){
            $a++;
            $b += $i;
        }
    }
$media = $b / $a;

echo "A soma é: $b\n";
echo "A média : $media";