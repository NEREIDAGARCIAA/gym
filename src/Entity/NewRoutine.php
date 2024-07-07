<?php

namespace App\Entity;

use App\Repository\NewRoutineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewRoutineRepository::class)]
class NewRoutine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Focus = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Exercises = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Reps = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Series = null;

    #[ORM\ManyToOne(inversedBy: 'userRoutine')]
    private ?UserSecurity $userSecurity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFocus(): ?string
    {
        return $this->Focus;
    }

    public function setFocus(?string $Focus): static
    {
        $this->Focus = $Focus;

        return $this;
    }

    public function getExercises(): ?string
    {
        return $this->Exercises;
    }

    public function setExercises(?string $Exercises): static
    {
        $this->Exercises = $Exercises;

        return $this;
    }

    public function getReps(): ?string
    {
        return $this->Reps;
    }

    public function setReps(?string $Reps): static
    {
        $this->Reps = $Reps;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->Series;
    }

    public function setSeries(?string $Series): static
    {
        $this->Series = $Series;

        return $this;
    }

    public function getUserSecurity(): ?UserSecurity
    {
        return $this->userSecurity;
    }

    public function setUserSecurity(?UserSecurity $userSecurity): static
    {
        $this->userSecurity = $userSecurity;

        return $this;
    }
}
