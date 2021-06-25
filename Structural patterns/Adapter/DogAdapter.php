<?php
class DogAdapter{
    private $dogTwo
    public function __construct($dogTwo) {
        $this->dogTwo = $dogTwo;
    }
    public function eat() {
        $this->dogTwo->eatTwo();
    }
}