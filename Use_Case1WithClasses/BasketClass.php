<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Basket
{
    function __construct(Array $properties=array()){
        foreach($properties as $key => $value){
          echo $this->{$key} = $value;
        }
    }

    function getTotalPrice()
    {   
        return $this->amount*$this->price;
    }
    
}