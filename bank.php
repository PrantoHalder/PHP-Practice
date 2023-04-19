<?php
 class BankAccount {
    public $BackAccountNumber;
    public $Balance;
    public function Depossit ($amount){
          if ($amount > 0){
            $this -> Balance += $amount;
          }
    }

    public function Withdraw ($amount){
       if ($amount <= $this -> Balance){
        $this -> Balance -= $amount;
        return true;
    }
    return false;
}
}

 $account = new BankAccount();
 $account -> BackAccountNumber=1;
 $account -> Balance=100;
 $account -> Depossit(100);
 $account -> Withdraw(10);

 $name = "Pranto";
 echo "hello".$name;
 echo "hello $name";
 echo "hello {$name}\n";
 echo "$name[0]\n";
 echo strlen($name);
?>