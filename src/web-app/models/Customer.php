<?php

class Customer
{
    private PDO $db;
    private bool $plus;
    private User $user;



    public function __construct(PDO $db, User $user, bool $plus)
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

        $stmt->bindValue(':userId', $this->user->getId());
        $stmt->bindValue(':plus', $this->plus);

        try {
            $stmt->execute();
            return $this->plus;

        } catch (Throwable $e) {
            $this->db->rollBack();
        }

    }

    public function getValues(): array
    {
        return [
            "user" => $this->user->getValues(),
            "isPlusPlan" => $this->plus,
        ];
    }




}
