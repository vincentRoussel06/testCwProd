<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
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
    private $Name;

    /**
     * @ORM\OneToMany(targetEntity=Randonnee::class, mappedBy="Type_id")
     */
    private $id_test;

    public function __construct()
    {
        $this->id_test = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return Collection|Randonnee[]
     */
    public function getIdTest(): Collection
    {
        return $this->id_test;
    }

    public function addIdTest(Randonnee $idTest): self
    {
        if (!$this->id_test->contains($idTest)) {
            $this->id_test[] = $idTest;
            $idTest->setTypeId($this);
        }

        return $this;
    }

    public function removeIdTest(Randonnee $idTest): self
    {
        if ($this->id_test->removeElement($idTest)) {
            // set the owning side to null (unless already changed)
            if ($idTest->getTypeId() === $this) {
                $idTest->setTypeId(null);
            }
        }

        return $this;
    }
}
