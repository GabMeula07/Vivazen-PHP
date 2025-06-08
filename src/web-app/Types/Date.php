<?php


class Date
{

    private DateTime $value;

    public function __construct(string $data)
    {
        try {
            $this->value = new DateTime($data);


            if ($this->value > new DateTime()) {
                throw new InvalidArgumentException("Data de nascimento não pode ser futura");
            }
            $idadeMinima = new DateTime('-18 years');

            if ($this->value > $idadeMinima) {
                throw new InvalidArgumentException("Idade mínima é 18 anos");
            }

        } catch (Exception $e) {
            throw new InvalidArgumentException("Data inválida: {$data}");
        }
    }

    public function getValue(): DateTime
    {
        return $this->value;
    }

    public function getFormatted(string $format = 'Y-m-d'): string
    {
        return $this->value->format($format);
    }

    public function getIdade(): int
    {
        return $this->value->diff(new DateTime())->y;
    }

    public function __toString(): string
    {
        return $this->getFormatted();
    }

    public function equals(Date $other): bool
    {
        return $this->value->format('Y-m-d') === $other->value->format('Y-m-d');
    }

}