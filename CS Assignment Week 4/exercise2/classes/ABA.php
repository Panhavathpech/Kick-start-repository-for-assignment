<?php
     require_once(__DIR__ . '/paymentMethod.php');

class ABA extends paymentMethod{

    protected $item;
    protected $price;
    protected $quantity;

    public function __construct($item, $price, $quantity){

        $this->item = $item;
        $this->price = $price;
        $this->quantity = $quantity;

    }

    public function getSale(){

        return ($this->price * $this->quantity);

    }

    public function getItem(){

        return $this->item;

    }


}