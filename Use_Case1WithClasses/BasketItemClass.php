<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class BasketItem
{
    public int $amount;
    public float $price;
    
    public string $type;
    public float $tax;

    function __construct($type,$price,$amount,$tax){
        $this->amount=$amount;
        $this->price=$price;
        $this->type=$type;
        $this->tax=$tax;
    }

    function getTotalPrice()
    {   
        return $this->amount*$this->price;
    }
    function getTotalTax()
    {   
        return $this->amount*$this->price*$this->tax;
    }
    
}