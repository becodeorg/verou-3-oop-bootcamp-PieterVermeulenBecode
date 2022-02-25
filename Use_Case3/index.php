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
require './Class.php';


$group1=new Group(1,['pieter'=>8,'Boris'=>6,'Joris'=>5]);
$group2=new Group(2,['pieterr'=>7,'Boris'=>6,'Joris'=>5]);

echo $group1->calculateAverage()."</br>";
echo $group2->calculateAverage()."</br>";
$group1->moveStudent("pieter",$group2);
pre($group1);
pre($group2);
echo $group1->calculateAverage()."</br>";
echo $group2->calculateAverage()."</br>";
// echo $group1->displayGroup();
// echo $group2->displayGroup();
