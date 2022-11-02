<?php

class Fruit {

    public $name; 
    public $color;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name; 
    }
}

$fruit_1 = new Fruit();

$fruit_1->set_name("Mango");
echo $fruit_1->get_name();

?>