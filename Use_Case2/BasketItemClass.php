<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class BasketItem
{
    private int $amount;
    private float $price;    
    private string $type;
    private float $tax;  
    private float $discount=1;

    function __construct($type,$price,$amount,$tax=0.06){
        $this->amount=$amount;
        $this->price=$price*$this->discount;
        $this->type=$type;
        $this->tax=$tax;    
    }

    function getTotalPrice()
    {   
        return $this->amount*$this->price*$this->discount;
    }
    function getTotalTax()
    {   
        return $this->amount*$this->price*$this->discount*$this->tax;
    }
    function getType()
    {
        return $this->type;
    }
    function giveDiscount($discount)
    {   
        $this->discount=$discount;
    }
    
}