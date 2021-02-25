<?php

    require_once('animal.php');

    class Frog extends Hewan
    {
        public $name;
        public $legs= 4;

        public function __construct($string)
        {
            $this->name = $string;
        }

        public function jump()
        {
            echo "hop hop";

        } 
    }

?>