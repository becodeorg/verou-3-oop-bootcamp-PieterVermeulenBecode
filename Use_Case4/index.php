<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function pre($arr)
{
	echo '<pre>';
    print_r($arr);
	echo '</pre>';
}
require './Content.php';

$article1=new Article("article1 title","Some interesting text1");
$article2=new Article("article2 title","Some interesting text2",true);
$ad1=new Ad("Ad title","Some interesting text3");
$vacancie1=new Vacancie("Vacancy title","Some interesting text4");
$content=[$article1,$article2,$ad1,$vacancie1];

foreach($content as $item)
{
    echo $item->getTitle();
    echo $item->getText();
}