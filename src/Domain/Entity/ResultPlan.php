<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table(name: 'tb_result_plan')]
class ResultPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\OneToOne(targetEntity: PlanUser::class)]
    #[ORM\JoinColumn(name: 'plan_user_id', referencedColumnName: 'id', nullable: false)]
    private PlanUser $planUser;

    #[ORM\Column(type: 'text')]
    private string $result;

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

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;
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
