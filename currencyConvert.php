<?php
function currencyConvert(float $amount,string $currency):string{
    $rate = null;
    switch($currency){
        case "dollar":
            $rate = 121.86;
            break;
        case "pound":
            $rate = 160.42;
            break;
        case "euro":
            $rate = 141.35;
            break;
         case "riyal":
            $rate =32.62;
            break;
    }
    $taka = $amount * $rate;
    return "{$amount} {$currency} = {$taka} BDT";
}

echo currencyConvert(100,"pound");

?>