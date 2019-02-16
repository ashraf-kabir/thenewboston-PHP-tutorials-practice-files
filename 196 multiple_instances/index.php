<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/26/2018
 * Time: 1:25 PM
 */


class BankAccount {
    public $balance = 0;

    public function DisplayBalance() {
        return 'Balance: '.$this->balance;
    }

    public function Withdraw($amount) {
        if (($this->balance)<$amount) {
            echo 'Not enough money.<br>';
        } else {
            $this->balance = $this->balance - $amount;
        }
    }

    public function Deposit($amount) {
        $this->balance = $this->balance + $amount;
    }
}

$alex = new BankAccount();
$billy = new BankAccount();

$alex->Deposit(100);
$billy->Deposit(200);

$alex->Withdraw(150);
$billy->Withdraw(50);

echo $alex->DisplayBalance().'<br>';
echo $billy->DisplayBalance();
