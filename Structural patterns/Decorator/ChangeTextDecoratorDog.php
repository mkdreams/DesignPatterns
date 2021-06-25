<?php
class ChangeTextDecoratorDog{
    public $dog;
    public function __construct($dog) {
        $this->dog = $dog;
    }

    public function eat() {
        return 'new '.$this->dog->eat();
    }
}