<?php
require_once('load.php');

use CoffeeCode\Router\Router;

$router = new Router(URI);
$router->namespace("Controller");

$router->get("/",'Login:index');
$router->post("/auth",'Login:auth');

$router->get("/dash",'Dash:index');
$router->get("/sair",'Dash:logoff');

$router->dispatch();

/*
 * Redirect all errors
 */
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}