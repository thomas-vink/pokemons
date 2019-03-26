<?php
//de resistance class
class Resistance
{
    public $name;
    public $resistance;

    public function __construct($name, $resistance)
    {
        $this->name = $name;
        $this->resistance = $resistance;
    }
}