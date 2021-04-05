<?php 

class Animal 
{
    public $nama;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($string)
    {
        $this->nama = $string;
    }
}

?>