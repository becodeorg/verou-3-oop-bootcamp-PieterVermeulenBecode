<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Group
{   private array $group;
    function __construct($groupnr,$array)
    {   
        $this->group=$array;
    }
    function calculateAverage()
    {   $totalScore=0;
        $numberOfScores=0;
        foreach($this->group as $name=>$grade){
            $totalScore+=$grade;
            $numberOfScores+=1;
        }
        return $totalScore/$numberOfScores;
    }
    function moveStudent($studentName,$newGroup)
    {
        foreach($this->group as $name=>$grade){
            if($name==$studentName){
                unset($this->group[$name]);
                
                $newGroup->group+= array($name => $grade);
               
            }
            
        }
        
    }
}


