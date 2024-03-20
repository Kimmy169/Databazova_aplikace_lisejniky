<?php

namespace App\Entity;

use App\Repository\LisejnikRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LisejnikRepository::class)]
class Lisejnik
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cesky_nazev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vedecky_nazev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trida = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rod = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $celed = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typ_substratu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ohrozeni = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poznamky = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCeskyNazev(): ?string
    {
        return $this->cesky_nazev;
    }

    public function setCeskyNazev(?string $cesky_nazev): static
    {
        $this->cesky_nazev = $cesky_nazev;

        return $this;
    }

    public function getVedeckyNazev(): ?string
    {
        return $this->vedecky_nazev;
    }

    public function setVedeckyNazev(?string $vedecky_nazev): static
    {
        $this->vedecky_nazev = $vedecky_nazev;

        return $this;
    }

    public function getTrida(): ?string
    {
        return $this->trida;
    }

    public function setTrida(?string $trida): static
    {
        $this->trida = $trida;

        return $this;
    }

    public function getRod(): ?string
    {
        return $this->rod;
    }

    public function setRod(?string $rod): static
    {
        $this->rod = $rod;

        return $this;
    }

    public function getCeled(): ?string
    {
        return $this->celed;
    }

    public function setCeled(?string $celed): static
    {
        $this->celed = $celed;

        return $this;
    }

    public function getTypSubstratu(): ?string
    {
        return $this->typ_substratu;
    }

    public function setTypSubstratu(?string $typ_substratu): static
    {
        $this->typ_substratu = $typ_substratu;

        return $this;
    }

    public function getOhrozeni(): ?string
    {
        return $this->ohrozeni;
    }

    public function setOhrozeni(?string $ohrozeni): static
    {
        $this->ohrozeni = $ohrozeni;

        return $this;
    }

    public function getPoznamky(): ?string
    {
        return $this->poznamky;
    }

    public function setPoznamky(?string $poznamky): static
    {
        $this->poznamky = $poznamky;

        return $this;
    }
}
