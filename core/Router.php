<?php

class Router
{
    private $routes = [
        "GET"=> [],
        "POST"=> []
    ];

    public static function load($filename)
    {
        $router = new Router();
        require $filename;
        return $router;
    }

    public function get($uri, $callback)
    {
        $this->routes["GET"][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->routes["POST"][$uri] = $callback;
    }


    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])){
            $arr = $this->routes[$method][$uri];
            $this->callAction($arr[0], $arr[1]);
        }else{
            dd("404 Page");
        }
    }

    private function callAction($class, $method)
    {  
        $class = new $class();
        $class->$method();
    }
}