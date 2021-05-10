<?php
require_once('DogFactory.php');

$RedCatFactory = new RedCatFactory();
$cat = $dogFoctory->createAnimal();
$color = $dogFoctory->createColor();
