<?php
     require_once(__DIR__ . '/paymentMethod.php');

class Wing extends paymentMethod{

    protected $itemWing;
    protected $priceWing;
    protected $quantityWing;

    public function __construct($itemWing, $priceWing, $quantityWing){

        $this->itemWing = $itemWing;
        $this->priceWing = $priceWing;
        $this->quantityWing = $quantityWing;

    }

    public function getSale(){

        return ($this->priceWing * $this->quantityWing);

    }

    public function getItem(){

        return $this->itemWing;
        return $this->itemWing;

    }


}