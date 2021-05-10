<?php
class Cat implements AnimalInterface{
    public function eat() {
        var_dump('Cat eat!');
    }
}