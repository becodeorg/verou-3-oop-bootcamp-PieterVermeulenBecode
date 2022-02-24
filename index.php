<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$banana= [
	"Amount"=>6,
    "Price"=>1,
    "tax"=>0.06
];
$apple=[
    "Amount"=>3,
    "Price"=>1.5,
    "tax"=>0.06 
];
$wineBottle=[
    "Amount"=>2,
    "Price"=>10,
    "tax"=>0.21
];
$basket=[
    $banana,
    $apple,
    $wineBottle
];
function totalPrice($basket)
{   $total=0;
    foreach($basket as $item)
    {       
        $total+=($item["Amount"]*$item["Price"]);
    }
    return $total;
}
function totalTax($basket)
{
    $totalTax=0;
    foreach($basket as $item)
    {
        $totalTax+=($item["Amount"]*$item["Price"]*$item["tax"]);
    }
    return $totalTax;
}
echo totalPrice($basket)."</br>";
echo totalTax($basket)."</br>";