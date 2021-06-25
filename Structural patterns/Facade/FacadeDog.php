<?php
class FacadeDog{
    private $dog;
    public function __construct() {
        $this->dog = new Dog();
    }

    public function eatOneAndTwo() {
        $this->dog->eat();
        $this->dog->eat2();
    }
}