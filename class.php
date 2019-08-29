<?php
class Animal
{
    public $name = "гость";

    public function __construct($name)
    {
        echo "Я живой!";
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "Я умер :(";
    }
}
?>