<?php
class RedRiceDog{
    private $color;
    private $eatType;

    public function __construct() {
        $this->color = new Color();
        $this->eatType = new EatType();
    }
    
    public function eat() {
        $this->color->red();
        $this->eatType->rice();
    }
}