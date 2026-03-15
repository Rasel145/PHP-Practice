<?php

$balance = 1000;
$transactions = [];
while (true) {
    echo "\n menu \n";
    echo "1. Check Balance \n";
    echo "2. Deposit Money \n";
    echo "3. Withdraw Money \n";
    echo "4. Transaction History \n";
    echo "5. Exit \n";
   
    
    $choice = (int)readline("Enter option : ");
    if ($choice === 1) {
        echo "Total balance : $balance \n";
    } else if ($choice === 2) {
        $deposit = (int) readline("Enter deposit amount : ");
        $balance = $balance + $deposit;
        $transactions[] = "Deposit : $deposit";
        echo "Deposit Successful \n";
        echo "Total balance = ".$balance . "\n" ;
        

    } else if ($choice === 3) {
        $withdraw = (int) readline("Enter withdraw amount : ");
        if ($withdraw > $balance) {
            echo "Insufficient Balance! \n";
        } else {
            echo "Withdraw Successful \n";
            $balance = $balance - $withdraw;
            $transactions[] = "Withdraw : $withdraw";
            echo "New Balance =" . $balance ."\n";
            

        }
    } else if ($choice === 4) {
      
       
      if(empty($transactions)){
        echo "No Transaction history found! \n";
      }else{
        foreach($transactions as $value) {
            echo $value ."\n";
        }
      }  
    } else if ($choice === 5) {

        echo "Thank you for using our bank \n";
        break;
    } else {
        echo "Please enter an number between 1 to 5 \n";
    }
}
