<?php

class CPF
{
    private $valor;

    public function __construct($cpf)
    {
        $cpf = $this->limpar($cpf);

        if (!$this->validar($cpf)) {
            http_response_code(422);
            throw new InvalidArgumentException("CPF inválido.");
        }

        $this->valor = $cpf;
    }

    private function limpar($cpf)
    {
        return preg_replace('/\D/', '', $cpf);
    }

    private function validar($cpf): bool
    {
        if (strlen($cpf) != 11)
            return false;
        if (preg_match('/(\d)\1{10}/', $cpf))
            return false;
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    // Retorna o CPF formatado
    public function __toString()
    {
        return substr($this->valor, 0, 3) . '.' .
            substr($this->valor, 3, 3) . '.' .
            substr($this->valor, 6, 3) . '-' .
            substr($this->valor, 9, 2);
    }

    // Retorna o CPF só com números
    public function getValor()
    {
        return $this->valor;
    }
}