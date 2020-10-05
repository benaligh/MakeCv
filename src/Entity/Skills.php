<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillsRepository::class)
 */
class Skills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $skills_name;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="skills")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkillsName(): ?string
    {
        return $this->skills_name;
    }

    public function setSkillsName(string $skills_name): self
    {
        $this->skills_name = $skills_name;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
