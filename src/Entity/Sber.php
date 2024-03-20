<?php

namespace App\Entity;

use App\Repository\SberRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SberRepository::class)]
class Sber
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datum = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 5)]
    private ?string $souradnice_sirka = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 5)]
    private ?string $souradnice_delka = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 5)]
    private ?string $nadmorska_vyska = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $substrat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poznamka = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): static
    {
        $this->datum = $datum;

        return $this;
    }

    public function getSouradniceSirka(): ?string
    {
        return $this->souradnice_sirka;
    }

    public function setSouradniceSirka(string $souradnice_sirka): static
    {
        $this->souradnice_sirka = $souradnice_sirka;

        return $this;
    }

    public function getSouradniceDelka(): ?string
    {
        return $this->souradnice_delka;
    }

    public function setSouradniceDelka(string $souradnice_delka): static
    {
        $this->souradnice_delka = $souradnice_delka;

        return $this;
    }

    public function getNadmorskaVyska(): ?string
    {
        return $this->nadmorska_vyska;
    }

    public function setNadmorskaVyska(string $nadmorska_vyska): static
    {
        $this->nadmorska_vyska = $nadmorska_vyska;

        return $this;
    }

    public function getSubstrat(): ?string
    {
        return $this->substrat;
    }

    public function setSubstrat(?string $substrat): static
    {
        $this->substrat = $substrat;

        return $this;
    }

    public function getPoznamka(): ?string
    {
        return $this->poznamka;
    }

    public function setPoznamka(?string $poznamka): static
    {
        $this->poznamka = $poznamka;

        return $this;
    }
}
