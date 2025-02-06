<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table(name: 'tb_plan_alias')]
class PlanAlias
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\OneToOne(targetEntity: PlanUser::class)]
    #[ORM\JoinColumn(name: 'plan_user_id', referencedColumnName: 'id', nullable: false)]
    private PlanUser $planUser;

    #[ORM\Column(type: 'string', length: 50)]
    private string $alias;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private DateTime $createdAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function getPlanUser(): PlanUser
    {
        return $this->planUser;
    }

    public function setPlanUser(PlanUser $planUser): self
    {
        $this->planUser = $planUser;
        return $this;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
