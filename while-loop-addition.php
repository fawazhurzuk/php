<?php
$continue = true;
while($continue){
 $num1 = (int)readline("Enter number one: ");
 $num2 = (int)readline("Enter number two: "); 
 
 $sum = $num1 + $num2;
 echo "The total sum is: $sum\n";
 $response = strtolower(readline("Do you want to add one more time?:"));

 if($response === "no" || $response === "n"){
     $continue = false;
 }elseif($response != "yes" && $response != "y"){
    echo "wrong response terminating program.\n";
    $continue = false; 
 }
}
echo "Program ended\n";
?>
