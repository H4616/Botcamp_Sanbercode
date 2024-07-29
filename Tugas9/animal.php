<?php

class Animal{
    public $legs = 4;
    public $makanan = "cacing";
    public $cold_blooded = "no";
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }

    
};


?>