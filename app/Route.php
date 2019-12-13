<?php
namespace App;
class Route {
    const ROUTE = [
        'kalba@rodyti' => ['language', 'view'],
        'kalba@redaguoti' => ['language', 'edit']
    ];

    public static function getController($url){
        $url_key = $url[0].'@'.$url[1];
        if(!isset(self::ROUTE[$url_key])){
            die('Klaida 1');
        }

        return self::ROUTE[$url_key];

    }
}