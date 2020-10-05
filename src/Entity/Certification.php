<?php

namespace App\Entity;

use App\Repository\CertificationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CertificationRepository::class)
 */
class Certification
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
    private $certification_name;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $certification_authority;

    /**
     * @ORM\Column(type="integer")
     */
    private $license_number;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_certification;

    /**
     * @ORM\Column(type="boolean")
     */
    private $expiry_certification;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="certifications")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertificationName(): ?string
    {
        return $this->certification_name;
    }

    public function setCertificationName(string $certification_name): self
    {
        $this->certification_name = $certification_name;

        return $this;
    }

    public function getCertificationAuthority(): ?string
    {
        return $this->certification_authority;
    }

    public function setCertificationAuthority(string $certification_authority): self
    {
        $this->certification_authority = $certification_authority;

        return $this;
    }

    public function getLicenseNumber(): ?int
    {
        return $this->license_number;
    }

    public function setLicenseNumber(int $license_number): self
    {
        $this->license_number = $license_number;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }
    
    public function getUrlCertification(): ?string
    {
        return $this->url_certification;
    }

    public function setUrlCertification(string $url_certification): self
    {
        $this->url_certification = $url_certification;

        return $this;
    }

    public function getExpiryCertification(): ?bool
    {
        return $this->expiry_certification;
    }

    public function setExpiryCertification(bool $expiry_certification): self
    {
        $this->expiry_certification = $expiry_certification;

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
