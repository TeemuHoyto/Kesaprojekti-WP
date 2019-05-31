<?php

namespace App;

class Event2 implements EventInterface {
    public $title;
    public $start_date;
    public $start_date_comment;
    public $end_date;
    
    
    public  function set_title( string $title){
        $this->title=$title;
        return $this;
    }
    public  function set_start_date( \DateTime $start_date){
        $this->start_date=$start_date;
        return $this;
    }
    public  function set_start_date_comment( string $start_date_comment){
        $this->start_date_comment=$start_date_comment;
        return $this;
    }
    public  function set_end_date( \DateTime $end_date){
        $this->end_date=$end_date;
        return $this;
    }
    public  function set_end_date_comment( string $end_date_comment){
        $this->end_date_comment=$end_date_comment;
        return $this;
    }
    public  function get_title(){
        return $this->title;
    }
    public function get_start_date( ?string $format ) {
        return $this->start_date->format( $format );
        
    }
    public  function start_date_comment(){
        return $this->start_date_comment;
    }
    public  function get_end_date( ?string $format ){
        return $this->end_date->format( $format );
    }
    public  function end_date_comment(){
        return $this->end_date_comment;
    }
    
}
