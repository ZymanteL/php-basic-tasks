<?php

// Create a class named "BankAccount" that contains a constructor that sets the property - the initial balance of the account. The class should have methods for depositing and withdrawing money, as well as a balance check method. The deposit and withdrawal methods should update the account balance property accordingly and return a message indicating the success or failure of the transaction, e.g. "You have successfully withdrawn 100 euros", "Account balance is too low".

class BankAccount {
    public $balance;

    function __construct($balance)
    {
        $this->balance = $balance;
    }

    function existingBalance() {
        return 'Balance ' . $this->balance . PHP_EOL;
    }

    function deposit($add) {
        if ($add > 0) {
            $this->balance += $add;
            return 'Deposit: ' . $add . PHP_EOL . 'Balance: ' . $this->balance . PHP_EOL;
        }
    }

    function withdraw($takeOut) {
        if ($takeOut > $this->balance) {
            return 'Account balance is too low' . PHP_EOL;
        } else {
            $this->balance -= $takeOut;
            return 'Withdrawn: ' . $takeOut . PHP_EOL . 'Balance: ' . $this->balance . PHP_EOL;
        }
    }

}

$yourBankAcc = new BankAccount(2000);
echo $yourBankAcc->existingBalance();
echo $yourBankAcc->deposit(200);
echo $yourBankAcc->withdraw(800);
echo $yourBankAcc->withdraw(1600);



