<?php
$routes = require __DIR__ . '/routes/web.php';
$requestUri = $_SERVER['REQUEST_URI'];
/*Busca dentro del sistema de rutas*/
$route = $routes[$requestUri] ?? null; /*--dentro de mi sistema de rutas hay rutas <registradas></registradas>*/

if ($route) {
    require __DIR__ . '/' . $route;
}else {
    http_response_code(404);
    echo "404 Not Found";
}

