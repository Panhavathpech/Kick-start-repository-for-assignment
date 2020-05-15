<?php
     require_once(__DIR__ . '/paymentMethod.php');

class Pipay extends paymentMethod{

    protected $itemPipay;
    protected $pricePipay;
    protected $quantityPipay;

    public function __construct($itemPipay, $pricePipay, $quantityPipay){

        $this->itemPipay = $itemPipay;
        $this->pricePipay = $pricePipay;
        $this->quantityPipay = $quantityPipay;

    }

    public function getSale(){

        return ($this->pricePipay * $this->quantityPipay);

    }

    public function getItem(){

        return $this->itemPipay;

    }


}