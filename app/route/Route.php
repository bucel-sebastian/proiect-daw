<?php

class Route {

    static public $routes = [];

    static public function get(string $path, callable $callback) {
        global $routes;
        $routes[$path] = $callback;
    }

    static public function run() {
        global $routes;

        $uri = $_SERVER['REQUEST_URI'];
        $uri = parse_url($uri);
        $found = false;

        foreach($routes as $path => $callback){
            if($path !== $uri['path']) continue;

            $found = true;
            $callback();
        }

        if(!$found){
            $notFoundCallBack = $routes['/404'];
            $notFoundCallBack();
        }

    }
}