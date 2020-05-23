<?php
class Fruit
{
    // Properties
    public $name;
    public $color;

    // Methods
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }
}
