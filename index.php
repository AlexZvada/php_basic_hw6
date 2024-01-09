<?php

function customMultiplication(int $a, int $b, ?callable $function = null): int{
    $result = $a * $b;
    if (is_callable($function)){
        $function($result);
    }
    return $result;
}

customMultiplication(2, 3);
customMultiplication(2, 3, function (int $number):void{
    echo $number;
});