<?php
$luckyNumber = rand(1,10);
$guess = rand(1,10);
$attempts = 1;
do{
    echo "Attempt $attempts : Guessed $guess \n";
    if($guess === $luckyNumber){
        echo "Correct! Lucky Number was $luckyNumber \n";
        break;
    }
    $guess = rand(1,10);
    $attempts ++;
}while(false);
 echo "Total attempts $attempts";


?>