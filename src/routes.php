<?php
$router = new \Bramus\Router\Router();

$router->get('/', function() {
    echo "Index";
});

$router->run();