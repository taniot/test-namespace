<?php

namespace Spazio2;

class Prova {
    private $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function getName(){
        return $this->name . ' -  Prova2.php';
    }
}