<?php 
class Customer {
    public $id;
    public $name; 
    public $email;
    public $balance; 

    public function __construct() {
        $this->id = 1;
        $this->name = "mazen";
        $this->email = "mazenkhtab11@gmail.com"; 
    }

    public function __destruct() {
        echo "destruct is running now...";
    }

    public function GetCustomer($f) {
        $this->id = $f;
    }
}

$customer = new Customer;

echo $customer->id;

$customer->GetCustomer(1);

echo $customer->id;