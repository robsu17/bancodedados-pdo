<?php

namespace Alura\Model;

class Student
{
    private int $id;
    private string $name;
    private \DateTimeInterface $birthDate;

    public function __construct(int $id, string $name, \DateTimeInterface $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $date;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function age(): int
    {
        return $this->birthDate->diff(new \DateTimeImmutable())->y;
    }
}