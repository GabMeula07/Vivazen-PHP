<?php

require_once "../core/database.php";
require_once "../core/router.php";
require_once "../controllers/test_database.php";

$router = new Router();


$router->add("get", "/web-app/api/test-conection", function () {
    $testController = new TestConnectionController();
    $testController->test();
});




$router->dispath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
