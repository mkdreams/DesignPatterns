<?php
require_once('Dog.php');

class Factory {
    public function create($type) {
        switch($type) {
            case 'Dog':
                return new Dog();
                break;
            case 'Cat':
                return new Dog();
                break;
        }
    }
}