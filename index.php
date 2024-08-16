<?php

$request = $_SERVER['REQUEST_URI'];

$request = strtok($request, '?');

switch ($request) {
    case '/':
    case '/index':
        require __DIR__ . '/home.php';
        break;
    case '/service-details':
        require __DIR__ . '/service-details.php';
        break;
    case '/portfolio-details':
        require __DIR__ . '/portfolio-details.php';
        break;
    case '/esuporte':
        require __DIR__ . '/services/esuporte.php';
        break;
    case '/eprontuario':
        require __DIR__ . '/services/eprontuario.php';
        break;    
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
