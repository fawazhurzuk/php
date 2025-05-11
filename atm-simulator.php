<?php
$correctPin = "1234";
$attempts = 0;
$maxAttempts = 3;
$authenticated = false;

// Step 1: Ask for PIN
while ($attempts < $maxAttempts) {
    $inputPin = readline("Enter your 4-digit PIN: ");
    
    if ($inputPin === $correctPin) {
        echo "PIN accepted. Access granted.\n";
        $authenticated = true;
        break;
    } else {
        $attempts++;
        echo "Incorrect PIN. Attempts left: " . ($maxAttempts - $attempts) . "\n";
    }
}

if (!$authenticated) {
    echo "Too many incorrect attempts. Card blocked.\n";
    exit(); // Stop the program
}

// Step 2: Main ATM menu
$balance = 1000;
$running = true;

echo "Welcome to Simple PHP ATM\n";

while ($running) {
    echo "\nChoose an option:\n";
    echo "1. Check Balance\n";
    echo "2. Deposit Money\n";
    echo "3. Withdraw Money\n";
    echo "4. Exit\n";

    $choice = (int)readline("Enter your choice (1-4): ");

    switch ($choice) {
        case 1:
            echo "Your current balance is: ₹$balance\n";
            break;

        case 2:
            $deposit = (int)readline("Enter amount to deposit: ");
            if ($deposit > 0) {
                $balance += $deposit;
                echo "$deposit deposited successfully. New balance: ₹$balance\n";
            } else {
                echo "Invalid deposit amount.\n";
            }
            break;

        case 3:
            $withdraw = (int)readline("Enter amount to withdraw: ");
            if ($withdraw > 0 && $withdraw <= $balance) {
                $balance -= $withdraw;
                echo "$withdraw withdrawn successfully. New balance: ₹$balance\n";
            } elseif ($withdraw > $balance) {
                echo "Insufficient balance.\n";
            } else {
                echo "Invalid withdrawal amount.\n";
            }
            break;

        case 4:
            echo "Thank you for using the ATM. Goodbye!\n";
            $running = false;
            break;

        default:
            echo "Invalid choice. Please select 1 to 4.\n";
    }
}
?>
