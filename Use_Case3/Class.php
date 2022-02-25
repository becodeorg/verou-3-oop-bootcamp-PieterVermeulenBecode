<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Group
{   
    private array $group;
    function __construct($group)
    {   $index=0;
        foreach($group as $name=>$grade){
            $array[$index]=array("name"=>$name,"grade"=>$grade,"id"=>uniqid());
            $index+=1;
            
        }
        
        $this->group=$array;
        
    }
    function calculateAverage()
    {   $totalScore=0;
        $numberOfScores=0;
        foreach($this->group as $student){
            $totalScore+=$student["grade"];
            $numberOfScores+=1;
        }
        $average=$totalScore/$numberOfScores;
        
        return $average;
    }
    function getBestStudent()
    {   $highestGrade=0;
        $highestGradeName=[];
        foreach($this->group as $student){
            if($highestGrade<=$student["grade"]){
                $highestGrade=$student["grade"];
            }    
        }
        foreach($this->group as $student){
            if($highestGrade==$student["grade"]){
                $highestGradeName=$student["name"];
            }                       
        }
        // $list = implode(',',$highestGradeName);
        // echo $list;
        return $highestGradeName;
    }
    function getWorstStudent()
    {   $highestGrade=10;
        $highestGradeName="";
        foreach($this->group as $student){
            if($highestGrade>=$student["grade"]){
                $highestGrade=$student["grade"];
            }    
        }
        foreach($this->group as $student){
            if($highestGrade==$student["grade"]){
                $highestGradeName=$student["name"];
            }                       
        }
        // $list = implode(',',$highestGradeName);
        // echo $list;
        return $highestGradeName;
    }

    function moveStudent($studentName,$newGroup)
    {
        foreach($this->group as $i=>$student){
            if($student["name"]==$studentName){
                array_push($newGroup->group, $this->group[$i]);
                unset($this->group[$i]);   
            }            
        }        
    }
}


