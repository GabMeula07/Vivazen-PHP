<?php


class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->validadeEmail($email);
        $this->email = $email;

    }

    private function validadeEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("O email não é valido");
        }
    }

    public function getValue(): string
    {
        return $this->email;
    }
}