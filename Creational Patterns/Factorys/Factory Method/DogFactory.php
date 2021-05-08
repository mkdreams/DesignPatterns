<?php
require_once('Dog.php');

class DogFactory {
    public function create() {
        return new Dog();
    }
}