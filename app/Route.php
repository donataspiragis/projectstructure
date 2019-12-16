<?php
namespace App;
class Route {

    /**
     * @param Array ROUTE
     * @return routes for controllers
     */
    const ROUTE = [
        'kalba@rodyti' => ['language', 'view'],
        'kalba@redaguoti' => ['language', 'edit'],
        'topic@index' => ['topic', 'index'],
        'topic@edit' => ['topic', 'edit'],
    ];

    /**
     * @param Array $url
     * @return url key
     */
    public static function getController($url){
        $url_key = $url[0].'@'.$url[1];
        if(!isset(self::ROUTE[$url_key])){
            die('Klaida 1');
        }

        return self::ROUTE[$url_key];

    }
}