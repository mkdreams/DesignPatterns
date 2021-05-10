<?php
require_once('DogFactory.php');

$Factory = new Factory();
$dog = $Factory->create('Dog');
$dog->eat();

$cat = $Factory->create('Cat');
$cat->eat();