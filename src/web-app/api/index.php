<?php

require_once "../core/database.php";
require_once "../core/router.php";
require_once "../controllers/test_database.php";
require_once "../controllers/CustomerController.php";

$router = new Router();

$base_url = "/web-app/api";

$router->add("GET", "$base_url/test-conection/", function () {
    $testController = new TestConnectionController();
    $testController->test();
});

$router->add("POST", "$base_url/user/", function () {
    $userController = new CustomerController();
    echo $userController->CreateCustomer($_POST);
    exit;
});

$router->add("GET", "$base_url/register/", function () {
    include '../views/register.php';
    exit;
});

$router->dispath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
