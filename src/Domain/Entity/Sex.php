<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table(name: 'tb_sex')]
class Sex
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 100)]
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
