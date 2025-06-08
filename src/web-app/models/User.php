<?php

require_once "../Types/Email.php";
require_once "../Types/CPF.php";
require_once "../Types/Date.php";


class User
{
    private Email $email;
    private CPF $cpf;
    private Date $data_nascimento;
    private string $name = "";
    private string $password = "";

    private $db;

    protected function __construct(
        string $name,
        string $sobrenome,
        string $email,
        string $cpf,
        Database $database,
        Date $data_nascimento,
        string $password
    ) {
        $this->name = "$name $sobrenome";
        $this->email = new Email($email);
        $this->data_nascimento = new Date($data_nascimento);
        $this->cpf = new CPF($cpf);
        $this->password = password_hash($password);
        $this->db = $database;
    }

    public function createUser()
    {
        $this->db->conn->beginTransaction();

        $sqlUsuario =
            "INSERT INTO Usuario (
                nome, data_nascimento, email, senha, cpf
            ) VALUES (
                :nome, :data_nascimento, :email, :senha,  :cpf
            )";

        $smtm = $this->db->conn->prepare($sqlUsuario);
        $smtm->bindParam(":nome", $this->name);
        $smtm->bindParam(":data_nascimento", $this->data_nascimento);
        $smtm->bindParam(":email", $this->email);
        $smtm->bindParam(":senha", $this->password);
        $smtm->bindParam(":cpf", $this->cpf);

        $smtm->execute();

        $this->db->conn = null;
    }


}