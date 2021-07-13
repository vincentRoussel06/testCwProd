<?php

namespace App\Entity;

use App\Repository\RandonneeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RandonneeRepository::class)
 */
class Randonnee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Createur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Duree;

    /**
     * @ORM\Column(type="integer")
     */
    private $Distance;

    /**
     * @ORM\Column(type="integer")
     */
    private $Denivele;

    /**
     * @ORM\Column(type="integer")
     */
    private $PointHaut;

    /**
     * @ORM\Column(type="integer")
     */
    private $PointBas;

    /**
     * @ORM\Column(type="boolean")
     */
    private $RetourDepart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Commune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Photo;

    /**
     * @ORM\ManyToOne(targetEntity=Difficulte::class, inversedBy="id_test")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Difficulte;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="id_test")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreateur(): ?string
    {
        return $this->Createur;
    }

    public function setCreateur(string $Createur): self
    {
        $this->Createur = $Createur;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->Duree;
    }

    public function setDuree(string $Duree): self
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->Distance;
    }

    public function setDistance(int $Distance): self
    {
        $this->Distance = $Distance;

        return $this;
    }

    public function getDenivele(): ?int
    {
        return $this->Denivele;
    }

    public function setDenivele(int $Denivele): self
    {
        $this->Denivele = $Denivele;

        return $this;
    }

    public function getPointHaut(): ?int
    {
        return $this->PointHaut;
    }

    public function setPointHaut(int $PointHaut): self
    {
        $this->PointHaut = $PointHaut;

        return $this;
    }

    public function getPointBas(): ?int
    {
        return $this->PointBas;
    }

    public function setPointBas(int $PointBas): self
    {
        $this->PointBas = $PointBas;

        return $this;
    }

    public function getDifficulte(): ?int
    {
        return $this->Difficulte;
    }

    public function setDifficulte(int $Difficulte): self
    {
        $this->Difficulte = $Difficulte;

        return $this;
    }

    public function getRetourDepart(): ?bool
    {
        return $this->RetourDepart;
    }

    public function setRetourDepart(bool $RetourDepart): self
    {
        $this->RetourDepart = $RetourDepart;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(string $Region): self
    {
        $this->Region = $Region;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(string $Commune): self
    {
        $this->Commune = $Commune;

        return $this;
    }

    public function getDepart(): ?string
    {
        return $this->Depart;
    }

    public function setDepart(string $Depart): self
    {
        $this->Depart = $Depart;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getTestDif(): ?Difficulte
    {
        return $this->testDif;
    }

    public function setTestDif(?Difficulte $testDif): self
    {
        $this->testDif = $testDif;

        return $this;
    }

    public function getDifficulteId(): ?Difficulte
    {
        return $this->Difficulte_id;
    }

    public function setDifficulteId(?Difficulte $Difficulte_id): self
    {
        $this->Difficulte_id = $Difficulte_id;

        return $this;
    }

    public function getTypeId(): ?Type
    {
        return $this->Type_id;
    }

    public function setTypeId(?Type $Type_id): self
    {
        $this->Type_id = $Type_id;

        return $this;
    }
}
