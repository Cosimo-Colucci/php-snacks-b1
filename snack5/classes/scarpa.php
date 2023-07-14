<?php

class Scarpa{
    public $type;


    function __construct($type){
        $this->$type = $type;
    }
}