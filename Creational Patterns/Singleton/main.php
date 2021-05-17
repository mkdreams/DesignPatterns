<?php
function getDogClass() {
    static $dog = new Dog();
    return $dog;
}

$dog = getDogClass();