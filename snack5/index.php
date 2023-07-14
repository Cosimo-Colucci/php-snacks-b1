<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.  -->
<?php

include_once __DIR__ '.'('/classes/scarpa.php');
include_once __DIR__ '.'('/classes/cappello.php');

class Indumento{
    public $materiale;


    function __construct($materiale){
        $this->$materiale = $materiale;
    }
}