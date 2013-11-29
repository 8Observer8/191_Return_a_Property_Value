<?php

class BankAccount {
    public $balance = 0;
    
    public function displayBalance() {
        return 'Balance: '.$this->balance;
    }
}

$alex = new BankAccount;
echo $alex->displayBalance();

/* Output
Balance: 0
*/
?>
