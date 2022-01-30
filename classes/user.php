<?php

class Movie {
    public $title;
    public $year;
    public $regist;
    public $actor;

    public function __construct($_title, $_year, $_regist, $_actor)
    {
       $this->title = $_title;
       $this->year = $_year; 
       $this->regist = $_regist; 
       $this->actor = $_actor;  
    }
}

