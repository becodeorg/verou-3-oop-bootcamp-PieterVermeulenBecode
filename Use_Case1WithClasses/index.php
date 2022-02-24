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
    return $total;
}
function totalTax($basket)
{
    $totalTax=0;
    foreach($basket as $basketItem)
    {
        $totalTax+=$basketItem->getTotalTax();
    }
    return $totalTax;
}
echo getTotalOfBasket($basket)." € </br>";
echo totalTax($basket)." € </br>";
