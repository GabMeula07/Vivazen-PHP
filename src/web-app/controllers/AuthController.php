<?php

require_once __DIR__ . "/../core/auth.php";

class AuthController extends Controller
{
    public function login(PDO $db, $post)
    {
        $missing = ["email", "password"];
        $this->verify_post($post, $missing);

        $login = AUTH::login($db, $_POST['email'], $_POST['password']);
        header('Content-Type: application/json');
        if (!$login) {
            http_response_code(401);
            $response = [
                "error_code" => 401,
                "message" => "usuário ou senha inválida"
            ];
            echo json_encode($response);
            exit;
        }

        http_response_code(201);
        $response = [
            "code" => 201,
            "message" => "usuario logado com sucesso!"
        ];
        echo json_encode($response);

        exit;

    }

    public function logout()
    {
        Auth::logout();
        header('Location: /web-app/login/');
        exit;
    }
}