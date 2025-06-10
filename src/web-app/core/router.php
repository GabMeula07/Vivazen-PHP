<?php

class Router
{
    private $routes = [];

    public function add($method, $url, $callback)
    {
        $pattern = preg_replace(
            '/\{[a-zA-Z_][a-zA-Z0-9_]*\}/',
            '([a-zA-Z0-9_]+)',
            $url
        );
        $pattern = "#^$pattern$#";

        $this->routes[] = [
            'method' => strtoupper($method),
            'url' => $url,
            'pattern' => $pattern,
            'callback' => $callback,
        ];
    }

    public function dispath($request_uri, $request_method)
    {
        $path = parse_url($request_uri, PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route["method"] === strtoupper($request_method)) {
                if (preg_match($route['pattern'], $path, $matches)) {
                    array_shift($matches);
                    return call_user_func_array($route["callback"], $matches);
                }
            }
        }
        http_response_code(404);
        include __DIR__ . '/../views/404.php';
        exit;
    }
}