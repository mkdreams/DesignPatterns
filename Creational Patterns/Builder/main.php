<?php
$dir = new Director();
$duixiang = $dir->build(new BuleBild());
$Zabild = $dir->build(new RedBild());

$BuleBild = $duixiang->show();
$Zabild = $Zabild->show();