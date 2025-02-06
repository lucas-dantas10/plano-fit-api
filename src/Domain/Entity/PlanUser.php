<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table(name: 'tb_plan_user')]
class PlanUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'planUser')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private User $user;

    #[ORM\OneToOne(targetEntity: Goal::class)]
    #[ORM\JoinColumn(name: 'goal_id', referencedColumnName: 'id', nullable: false)]
    private Goal $goal;

    #[ORM\OneToOne(targetEntity: Sex::class)]
    #[ORM\JoinColumn(name: 'sex_id', referencedColumnName: 'id', nullable: false)]
    private Sex $sex;

    #[ORM\Column(name: 'born_date', type: 'date')]
    private DateTime $bornDate;

    #[ORM\Column(name: 'height', type: 'float')]
    private float $height;

    #[ORM\Column(name: 'weight', type: 'float')]
    private float $weight;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private DateTime $createdAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getGoal(): Goal
    {
        return $this->goal;
    }

    public function setGoal(Goal $goal): self
    {
        $this->goal = $goal;
        return $this;
    }

    public function getSex(): Sex
    {
        return $this->sex;
    }

    public function setSex(Sex $sex): self
    {
        $this->sex = $sex;
        return $this;
    }

    public function getBornDate(): DateTime
    {
        return $this->bornDate;
    }

    public function setBornDate(DateTime $bornDate): self
    {
        $this->bornDate = $bornDate;
        return $this;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
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
