<?php

namespace App\Entity;

use App\Repository\OrganizationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrganizationRepository::class)
 */
class Organization
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
    private $organization_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title_organization;

    /**
     * @ORM\Column(type="date")
     */
    private $start_end;

    /**
     * @ORM\Column(type="date")
     */
    private $end_date;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="organizations")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrganizationName(): ?string
    {
        return $this->organization_name;
    }

    public function setOrganizationName(string $organization_name): self
    {
        $this->organization_name = $organization_name;

        return $this;
    }

    public function getTitleOrganization(): ?string
    {
        return $this->title_organization;
    }

    public function setTitleOrganization(string $title_organization): self
    {
        $this->title_organization = $title_organization;

        return $this;
    }

    public function getStartEnd(): ?\DateTimeInterface
    {
        return $this->start_end;
    }

    public function setStartEnd(\DateTimeInterface $start_end): self
    {
        $this->start_end = $start_end;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
