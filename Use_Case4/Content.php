<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Content
{
    protected $text;
    protected $title;

    function __construct($title,$text)
    {
        $this->text=$text;
        $this->title=$title;
        
    }
}
class Article extends Content
{   protected $breakingNews;
    function __construct($title,$text,bool $breakingNews=false)
    {
        parent::__construct($title,$text);
        $this->breakingNews=$breakingNews;
    }
    function getTitle()
    {   if($this->breakingNews)
        {
            return "<h3>BREAKING ".$this->title."</h3>";
        }else
        {
            return "<h3>".$this->title."</h3>";
        }
    }
    function getText()
    {
        return "<p>".$this->text."</p>";
    }
}
class Ad extends Content
{   
    function __construct($title,$text)
    {   
        parent::__construct($title,$text);
    }
    function getTitle()
    {
        $capsTitle= strtoupper($this->title);
        return "<h3>".$capsTitle."</h3>";
    }
    function getText()
    {
        return "<p>".$this->text."</p>";
    }
}
class Vacancie extends Content
{   
    function __construct($title,$text)
    {
        parent::__construct($title,$text);
    }
    function getTitle()
    {
        return "<h3> - apply now! ".$this->title."</h3>";
    }
    function getText()
    {
        return "<p>".$this->text."</p>";
    }
}