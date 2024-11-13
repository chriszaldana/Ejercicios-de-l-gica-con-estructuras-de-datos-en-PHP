<?php

function sumPares($arr){

    $leng = count($arr);
    $pares = [];
    for ($i=0; $i <$leng ; $i++) { 
        if ($arr[$i] % 2 == 0) {
            $pares[] = $arr[$i];
        }
    }
    return array_sum($pares);
}

$nums = [1,2,3,4,5,6,7,8,9,10];
print_r(sumPares($nums));

?>