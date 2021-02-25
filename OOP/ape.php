<?php

    require_once('animal.php');

    class Ape extends Hewan
    {
        public $name;
        public $legs= 2;

        public function __construct($string)
        {
            $this->name = $string;
        }

        public function yell()
        {
            echo "Auooo";

        } 
    }

?>