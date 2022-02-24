<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './BasketItemClass.php';
$banana=new BasketItem("fruit",1,6,0.06);
$apple=new BasketItem("fruit",1.5,3,0.06);
$wineBottle=new BasketItem("Alkool",10,2,0.21);
$basket=[$banana,$apple,$wineBottle];
function getTotalOfBasket($basket)
{
    $total=0;
    foreach($basket as $basketItem)
    {        
        $total+=$basketItem->getTotalPrice();
    }
    return "The total price of your basket is: {$total}";
}
function totalTax($basket)
{
    $totalTax=0;
    foreach($basket as $basketItem)
    {
        $totalTax+=$basketItem->getTotalTax();
    }
    return "The total tax of your basket is: {$totalTax}";
}
function changePriceOfType($basket,$type,$discount)
{
    foreach($basket as $basketItem)
    {
        if($basketItem->getType()==$type){
            $basketItem->giveDiscount($discount);
        }
    }
    return "price of all {$type} is multiplied with {$discount}";
}

echo getTotalOfBasket($basket)." € </br>";
echo totalTax($basket)." € </br>";
echo changePriceOfType($basket,"fruit",0.5)." </br>";;
echo getTotalOfBasket($basket)." € </br>";