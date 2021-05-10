<?php
class BuleBild extends BildBuilder{

    public function buildHeader(){
        $this->bild->header = 'bule';
    }

    public function buildChiBang(){
        $this->bild->chibang = 'bule';
    }

    public function buildJiao(){
        $this->bild->jiao = 'bule';
    }

    public function GetBird(){
        return $this->bild;
    }
}