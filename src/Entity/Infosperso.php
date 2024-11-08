<?php

namespace App\Entity;

use App\Repository\InfospersoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfospersoRepository::class)]
class Infosperso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $civility = null;

    #[ORM\Column(length: 255)]
    private ?string $tele_mobile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tele_fixe = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): static
    {
        $this->civility = $civility;

        return $this;
    }

    public function getTeleMobile(): ?string
    {
        return $this->tele_mobile;
    }

    public function setTeleMobile(string $tele_mobile): static
    {
        $this->tele_mobile = $tele_mobile;

        return $this;
    }

    public function getTeleFixe(): ?string
    {
        return $this->tele_fixe;
    }

    public function setTeleFixe(?string $tele_fixe): static
    {
        $this->tele_fixe = $tele_fixe;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
