<?php
abstract class BildBuilder{

    public  $bild;
    public function __construct()
    {
        $this->bild = new bild();
    }

    abstract function buildHeader();
    abstract function buildChiBang();
    abstract function buildJiao();
}