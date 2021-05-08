<?php
require_once('Cat.php');

class CatFactory {
    public function create() {
        return new Cat();
    }
}