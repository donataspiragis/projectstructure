<?php

namespace App\Controller;

class Language {
    public function view(){
        echo 'Language viewsas ';
    }
    public function edit($par){
        echo 'Language viewsas EDIT' . $par;
    }
}