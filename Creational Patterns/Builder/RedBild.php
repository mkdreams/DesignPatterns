<?php
class RedBild extends BildBuilder{

    public function buildHeader(){
        $this->bild->header = 'Red';
    }

    public function buildChiBang(){
        $this->bild->chibang = 'huang';
    }

    public function buildJiao(){
        $this->bild->jiao = 'qings';
    }

    public function GetBird(){
        return $this->bild;
    }
}