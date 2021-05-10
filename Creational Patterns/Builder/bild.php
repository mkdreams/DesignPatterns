<?php
class bild {
    public $header;
    public $chibang;
    public $jiao;

    function show(){
        echo '头的颜色'.$this->header."<br>";
        echo '翅膀的颜色'.$this->chibang."<br>";
        echo '叫的颜色'.$this->jiao."<br>";
    }

}