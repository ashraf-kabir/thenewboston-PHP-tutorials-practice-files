<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/26/2018
 * Time: 12:56 PM
 */

class BankAccount {
    public $balance = 3500;

    //var $balanceOfAccount = 4000;       // it will show

    //var $_balance = 4500;          // private var
    //var $_Tbalance = 5500;          // protected var

    public function DisplayBalance() {
        return $this->balance;
    }
}

$alex = new BankAccount;
echo $alex->DisplayBalance();
