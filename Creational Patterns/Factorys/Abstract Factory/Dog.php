<?php
class Dog implements AnimalInterface{
    public function eat() {
        var_dump('dog eat!');
    }
}