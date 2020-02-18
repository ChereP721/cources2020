<?php
function SumLess ($numer){
    if(is_numeric($numer) and is_int($numer)){
        $sum = 0;
        while ($numer>0){
            $numer--;
            $sum += $numer;

        }

    }
    else echo 'Введите целое цчисло';

    return $sum;
}

var_dump(SumLess(123456));
