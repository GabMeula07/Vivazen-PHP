<?php

class Auth
{
    public static function login(PDO $db, string $email, string $password)
    {
        $stmt = $db->prepare("SELECT * FROM Usuario WHERE email = :email LIMIT 1;");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['senha'])) {

            $_SESSION['user_id'] = $user['id_usuario'];
            $_SESSION['user_type'] = $user['tipo_usuario'];

            return true;
        }

        return false;

    }
    public static function logout()
    {
        session_unset();
        session_destroy();
    }

    public static function check()
    {
        return isset($_SESSION['user_id']);
    }

    public static function userId()
    {
        return $_SESSION['user_id'] ?? null;
    }

    public static function userType()
    {
        return $_SESSION['user_type'] ?? null;
    }

    public static function requireLogin()
    {
        if (!self::check()) {
            header('Location: /web-app/login/');
            exit;
        }
    }

    public static function requireRole($role)
    {
        self::requireLogin();
        if (self::userType() !== $role) {
            http_response_code(403);
            echo json_encode(['error' => true, 'message' => 'Acesso negado']);
            exit;
        }
    }
}