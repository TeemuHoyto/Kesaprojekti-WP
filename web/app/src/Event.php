<?php

namespace App;

Class Event{
    public $title;
    public $startdate;
    public $enddate;


    public  function set_title( string $title){
        $this->title=$title;
        return $this;
    }
    public  function set_startdate( string $startdate){
        $this->startdate=$startdate;
        return $this;
    }
    public  function set_enddate( string $enddate){
        $this->enddate=$enddate;
        return $this;
    }
    public  function get_title(){
        return $this->title;
    }
    public  function get_startdate(){
        return $this->startdate;
    }
    public  function get_enddate(){
        return $this ->enddate;
    }
    
    
}

?>