<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 8:06 PM
 */

class BankAccount {
    public $balance = 1000;

    public function DisplayBalance() {
        echo 'Balance: '.$this->balance;
    }
}

$alex = new BankAccount;
$alex->DisplayBalance();

/*
class BankAccount {
    public $balance = 1000;

    public function DisplayBalance() {
        return 'Balance: '.$this->balance;
    }
}

$alex = new BankAccount;
echo $alex->DisplayBalance();
*/
