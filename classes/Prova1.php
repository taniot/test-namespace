<?php

namespace Spazio1;

class Prova {
    private $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function getName(){
        return $this->name . ' -  Prova1.php';
    }
}