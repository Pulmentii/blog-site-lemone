<?php
$router = new \Bramus\Router\Router();

$router->get('/', function() {
    echo "Index";
});

// User authentication routes
$router->get('/register', function() {
    include __DIR__ . '/views/register.view.php';
});

$router->run();