<?php
require_once('DogFactory.php');

$dogFoctory = new DogFactory();
$dog = $dogFoctory->create();
$dog->eat();

$catFoctory = new CatFactory();
$cat = $catFoctory->create();
$cat->eat();