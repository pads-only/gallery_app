<?php

$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/books/gallery_project/' => 'controller/images.controller.php',
    '/books/gallery_project/image' => 'controller/image.controller.php',
    '/books/gallery_project/create' => 'controller/create.controller.php',
];


function abort($code = 404)
{
    http_response_code($code);
    require("views/{$code}.php");
    die();
}

function router($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}

router($uri, $routes);
