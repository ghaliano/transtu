<?php

namespace App\Entity;

use App\Repository\PathRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PathRepository::class)
 */
class Path
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Ligne::class, inversedBy="yes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ligne;

    /**
     * @ORM\ManyToOne(targetEntity=Station::class, inversedBy="yes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Station;

    /**
     * @ORM\Column(type="smallint")
     */
    private $rang;

    /**
     * @ORM\OneToMany(targetEntity=Timing::class, mappedBy="path")
     */
    private $y;

    public function __construct()
    {
        $this->y = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigne(): ?Ligne
    {
        return $this->ligne;
    }

    public function setLigne(?Ligne $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getStation(): ?Station
    {
        return $this->Station;
    }

    public function setStation(?Station $Station): self
    {
        $this->Station = $Station;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * @return Collection|Timing[]
     */
    public function getY(): Collection
    {
        return $this->y;
    }

    public function addY(Timing $y): self
    {
        if (!$this->y->contains($y)) {
            $this->y[] = $y;
            $y->setPath($this);
        }

        return $this;
    }

    public function removeY(Timing $y): self
    {
        if ($this->y->removeElement($y)) {
            // set the owning side to null (unless already changed)
            if ($y->getPath() === $this) {
                $y->setPath(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->ligne . "-" . $this->Station;
    }
}
