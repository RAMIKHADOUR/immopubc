<?php

namespace App\Entity;

use App\Repository\PropertysRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertysRepository::class)]
class Propertys
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $surface = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column]
    private ?int $chambres = null;

    #[ORM\Column]
    private ?int $sallebains = null;

    #[ORM\Column]
    private ?int $etages = null;

    #[ORM\Column]
    private ?int $numero_etage = null;

    #[ORM\Column]
    private ?bool $internet = null;

    #[ORM\Column]
    private ?bool $garage = null;

    #[ORM\Column]
    private ?bool $piscine = null;

    #[ORM\Column]
    private ?bool $camera = null;

    #[ORM\Column]
    private ?int $numero_voie = null;

    #[ORM\Column(length: 50)]
    private ?string $type_voie = null;

    #[ORM\Column(length: 255)]
    private ?string $name_voie = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 100)]
    private ?string $code_postale = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'propertys')]
    private ?Categorysbien $categorybien = null;

    #[ORM\ManyToOne(inversedBy: 'propertys')]
    private ?Typesbien $typesbien = null;

    #[ORM\ManyToOne(inversedBy: 'propertys')]
    private ?Users $users = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getChambres(): ?int
    {
        return $this->chambres;
    }

    public function setChambres(int $chambres): static
    {
        $this->chambres = $chambres;

        return $this;
    }

    public function getSallebains(): ?int
    {
        return $this->sallebains;
    }

    public function setSallebains(int $sallebains): static
    {
        $this->sallebains = $sallebains;

        return $this;
    }

    public function getEtages(): ?int
    {
        return $this->etages;
    }

    public function setEtages(int $etages): static
    {
        $this->etages = $etages;

        return $this;
    }

    public function getNumeroEtage(): ?int
    {
        return $this->numero_etage;
    }

    public function setNumeroEtage(int $numero_etage): static
    {
        $this->numero_etage = $numero_etage;

        return $this;
    }

    public function isInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(bool $internet): static
    {
        $this->internet = $internet;

        return $this;
    }

    public function isGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): static
    {
        $this->garage = $garage;

        return $this;
    }

    public function isPiscine(): ?bool
    {
        return $this->piscine;
    }

    public function setPiscine(bool $piscine): static
    {
        $this->piscine = $piscine;

        return $this;
    }

    public function isCamera(): ?bool
    {
        return $this->camera;
    }

    public function setCamera(bool $camera): static
    {
        $this->camera = $camera;

        return $this;
    }

    public function getNumeroVoie(): ?int
    {
        return $this->numero_voie;
    }

    public function setNumeroVoie(int $numero_voie): static
    {
        $this->numero_voie = $numero_voie;

        return $this;
    }

    public function getTypeVoie(): ?string
    {
        return $this->type_voie;
    }

    public function setTypeVoie(string $type_voie): static
    {
        $this->type_voie = $type_voie;

        return $this;
    }

    public function getNameVoie(): ?string
    {
        return $this->name_voie;
    }

    public function setNameVoie(string $name_voie): static
    {
        $this->name_voie = $name_voie;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostale(): ?string
    {
        return $this->code_postale;
    }

    public function setCodePostale(string $code_postale): static
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCategorybien(): ?Categorysbien
    {
        return $this->categorybien;
    }

    public function setCategorybien(?Categorysbien $categorybien): static
    {
        $this->categorybien = $categorybien;

        return $this;
    }

    public function getTypesbien(): ?Typesbien
    {
        return $this->typesbien;
    }

    public function setTypesbien(?Typesbien $typesbien): static
    {
        $this->typesbien = $typesbien;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): static
    {
        $this->users = $users;

        return $this;
    }
}
