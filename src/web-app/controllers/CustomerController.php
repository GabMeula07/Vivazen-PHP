<?php

require_once __DIR__ . "/../core/database.php";
require_once "Controller.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Customer.php";


class CustomerController extends Controller
{
    public function createCustomer($post)
    {
        $db = new Database();
        $pdo = $db->getConnection();

        $required = [
            'name',
            'last_name',
            'email',
            'password',
            'cpf',
            'birth_date',
            'plus'
        ];

        $this->verify_post($post, $required);

        $pdo->beginTransaction();
        try {


            $user = new User(
                database: $pdo,
                name: $post["name"],
                last_name: $post["last_name"],
                email: $post["email"],
                password: $post['password'],
                birth_date: $post['birth_date'],
                cpf: $post['cpf'],
                type: UserType::CUSTOMER
            );

            $user->createUser();
            $plus = isset($post['plus']) && $post['plus'] !== '' ? (int) $post['plus'] : 0;
            $customer = new Customer(
                $pdo,
                $user,
                $plus
            );

            $plus = $customer->createCustomer();
            $pdo->commit();

            http_response_code(201);
            $response = [
                "user" => $customer->getValues(),
                "message" => "Usuário criado com sucesso!"
            ];
            echo json_encode($response);
            exit;

        } catch (Throwable $e) {
            http_response_code(422);

            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }

            $response = [
                "error_code" => 422,
                "message" => "Erro ao criar o usuário: " . $e->getMessage()
            ];

            echo json_encode($response);
            exit;
        }


    }

}