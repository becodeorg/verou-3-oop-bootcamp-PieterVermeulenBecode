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


$group1=new Group(['pieter'=>9,'Boris'=>6,'Joris'=>5,'pieter'=>8,'Boris'=>6,'Joris'=>5,'pieter'=>8,'Boris'=>6,'Joris'=>5,'Goris'=>1]);
$group2=new Group(['pieter'=>7,'Boris'=>9,'Joris'=>5,'pieter'=>8,'Boris'=>6,'Joris'=>5,'pieter'=>8,'Boris'=>6,'Joris'=>5,'Goris'=>1]);

echo "the average of group1 is: ".$group1->calculateAverage()."</br>";
echo "the average of group2 is: ".$group2->calculateAverage()."</br>";

$group1->moveStudent("pieter",$group2);

// echo "the average of group1 is: ".$group1->calculateAverage()."</br>";
// echo "the average of group2 is: ".$group2->calculateAverage()."</br>";

$group1->moveStudent($group1->getBestStudent(),$group2);
$group2->moveStudent($group2->getWorstStudent(),$group1);

echo "the average of group1 is: ".$group1->calculateAverage()."</br>";
echo "the average of group2 is: ".$group2->calculateAverage()."</br>";
pre($group1);
pre($group2);