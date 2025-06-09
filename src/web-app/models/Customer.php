<?php

class Customer
{
    private PDO $db;
    private bool $plus;
    private User $user;



    public function __construct(PDO $db, User $user, int $plus)
    {
        $this->plus = $plus;
        $this->user = $user;
        $this->db = $db;
    }

    public function createCustomer()
    {
        $sqlQuerie = 'INSERT INTO Customer (
            usuario_id, plus
        ) VALUES (
            :userId, :plus
        )';

        $stmt = $this->db->prepare($sqlQuerie);

        $stmt->bindValue(':userId', $this->user->getId(), PDO::PARAM_INT);
        $stmt->bindValue(':plus', $this->plus, PDO::PARAM_INT);


        $stmt->execute();
        return $this->plus;



    }

    public function getValues(): array
    {
        return [
            "user" => $this->user->getValues(),
            "isPlusPlan" => $this->plus,
        ];
    }




}
