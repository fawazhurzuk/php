<?php
$secretnumber = rand(1,100);
$guessedcorrectly = false;

echo "Welcome to the number guessing game! \n";

while(!$guessedcorrectly){
    $guess = (int)readline("Enter your guess: ");
    
    if($guess < $secretnumber){
        echo "Too low!";
    }elseif($guess > $secretnumber){
        echo "Too High!";
    }else{
        echo "Congratulations! Perfect guess. $secretNumber\n";
        $guessedcorrectly = true;
    }
}
?>
