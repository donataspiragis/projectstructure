<?php
namespace App;
class App {
    const INSTALL_FOLDER = '/projectstructure/public';
    private static $request_url;
    private static $controller;

    /**
     * @param Function call to start app
     * @return returns app with predifined routes 
     */
    public static function start(){
       self::$request_url = str_replace(self::INSTALL_FOLDER, '', $_SERVER['REQUEST_URI']);
       self::$request_url = ltrim( self::$request_url, '/');
       self::$request_url = rtrim( self::$request_url, '/');
       self::$request_url = explode('/', self::$request_url);

       $controller = Route::getController(self::$request_url);

        $g = 'App\\Controller\\'.$controller[0];

        
        self::$controller = new $g;
        self::$controller->{$controller[1]}(self::$request_url[2] ?? '');
    }
}