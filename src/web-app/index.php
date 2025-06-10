<?php
session_start();
require_once __DIR__ . "/core/database.php";
require_once __DIR__ . "/core/router.php";
require_once __DIR__ . "/core/auth.php";

require_once __DIR__ . "/controllers/test_database.php";
require_once __DIR__ . "/controllers/CustomerController.php";

$router = new Router();
$base_url = "/web-app/api";


$router->add("GET", "$base_url/test-conection/", function () {
    $testController = new TestConnectionController();
    $testController->test();
    exit;
});


$router->add("POST", "$base_url/user/", function () {
    $userController = new CustomerController();
    echo $userController->CreateCustomer($_POST);
    exit;
});


$router->add("POST", "$base_url/auth/", function () {
    $db = new Database();
    $pdo = $db->getConnection();

    $login = AUTH::login($pdo, $_POST['email'], $_POST['password']);
    if (!$login) {
        http_response_code(401);
        $reponse = [
            "error_code" => 401,
            "message" => "usuário ou senha inválida"
        ];
        echo json_encode($reponse);
    }
    exit;
});


$router->add("GET", "/web-app/register/", function () {
    include __DIR__ . '/views/register.php';
    exit;
});


$router->add("GET", "/web-app/login/", function () {
    include __DIR__ . '/views/login.php';
    exit;
});


$router->dispath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
