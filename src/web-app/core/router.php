<?php

class Router
{
    private $routes = [];

    public function add($method, $url, $callback)
    {
        $this->routes[] = [
            'method' => strtoupper($method),
            'url' => $url,
            'callback' => $callback,

        ];
    }

    public function dispath($request_uri, $request_method)
    {
        $path = parse_url($request_uri, PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if (
                $route["url"] === $path
                && $route["method"] === strtoupper($request_method)
            ) {
                return call_user_func($route["callback"]);
            }
        }

    }

}