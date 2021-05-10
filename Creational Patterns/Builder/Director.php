<?php

class Director {
    public function build($build){
        $build->buildHeader();
        $build->buildChiBang();
        $build->buildJiao();
        return $build->GetBird();
    } 
}