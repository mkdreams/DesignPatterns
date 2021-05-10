<?php
require_once('Cat.php');

class RedCatFactory {
    public function createAnimal() {
        return new Cat();
    }
    public function createColor() {
        return new Red();
    }
}