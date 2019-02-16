<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 8:27 PM
 */

class BankAccount {
    public $balance = 1000;

    public function DisplayBalance() {
        return 'Balance: '.$this->balance;
    }

    public function Withdraw($amount) {
        if (($this->balance)<$amount) {
            echo 'Not enough money!<br>';
        } else {
            $this->balance = $this->balance - $amount;
        }
    }
}

$alex = new BankAccount;
$alex->Withdraw(1500);
echo $alex->DisplayBalance();
