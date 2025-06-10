<?php

require_once __DIR__ . "/../Types/Email.php";
require_once __DIR__ . "/../Types/CPF.php";
require_once __DIR__ . "/../Types/Date.php";


class UserType
{
    const CUSTOMER = "customer";
    const PROFESSIONAL = "professional";
    const ADM = "admin";
}


class User
{
    private $db;
    private int $id;
    private string $name = "";
    private Email $email;
    private string $password = "";
    private CPF $cpf;
    private Date $birth_date;
    private string $type;

    public function __construct(
        PDO $database,
        string $name,
        string $last_name,
        string $email,
        string $password,
        string $birth_date,
        string $cpf,
        string $type = null,

    ) {
        $this->name = "$name $last_name";
        $this->email = new Email($email);
        $this->birth_date = new Date($birth_date);
        $this->cpf = new CPF($cpf);
        $this->password = password_hash($password, PASSWORD_ARGON2I);
        $this->db = $database;
        $this->type = $type;
    }

    public function getEmail()
    {
        return $this->email->getValue();
    }

    public function getId()
    {
        return $this->id;
    }

    public function validade_user()
    {
        $sqlUsuario = "SELECT email, cpf from Usuario";
        $stmt = $this->db->query($sqlUsuario);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            if ($user['email'] === $this->getEmail()) {
                http_response_code(422);
                $response = [
                    'error_code' => 422,
                    'message' => "Esse Email já está cadastrado."
                ];
                echo json_encode($response);
                exit;
            }
            if ($user['cpf'] === $this->cpf->__toString()) {
                http_response_code(422);
                $response = [
                    'error_code' => 422,
                    'message' => "Esse CPF já está cadastrado."
                ];
                echo json_encode($response);
                exit;
            }
        }

    }

    public function createUser()
    {

        $this->validade_user();

        $sqlUsuario =
            "INSERT INTO Usuario (
                nome, data_nascimento, email, senha, cpf, tipo_usuario
            ) VALUES (
                :nome, :data_nascimento, :email, :senha,  :cpf, :tipo_usuario
            )";

        $smtm = $this->db->prepare($sqlUsuario);

        $smtm->bindValue(":nome", $this->name);
        $smtm->bindValue(":data_nascimento", $this->birth_date->getFormatted());
        $smtm->bindValue(":email", $this->getEmail());
        $smtm->bindValue(":senha", $this->password);
        $smtm->bindValue(":cpf", $this->cpf->__toString());
        $smtm->bindValue(":tipo_usuario", $this->type);



        $smtm->execute();
        $this->id = $this->db->lastInsertId();


    }

    public function getValues(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->getEmail(),
            "cpf" => $this->cpf->__toString(),
            "birth_date" => $this->birth_date->getFormatted(),
            "type" => $this->type
        ];
    }

}