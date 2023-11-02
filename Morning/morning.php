<?php 
    $apples = 0;
    $money = 20;

    echo "What would you like to do? Eat an apple or buy an apple? \n";
    echo "eat/buy\n";

    $response = trim(fgets( STDIN ));

    if ($response === 'eat') {
        $apples --;
        echo "you have " . $apples . " apples and $" . $money ."\n";
    } else {
        $apples ++;
        $money --;
        echo "you have " . $apples . " apples and $" . $money . "\n";
    }

?>