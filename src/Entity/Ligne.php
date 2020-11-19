<?php

namespace App\Entity;

use App\Repository\LigneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneRepository::class)
 */
class Ligne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity=Station::class, inversedBy="Lignes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $StartStation;

    /**
     * @ORM\ManyToOne(targetEntity=Station::class, inversedBy="Lignes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $endStation;

    /**
     * @ORM\ManyToOne(targetEntity=Site::class, inversedBy="Lignes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Site;

    /**
     * @ORM\OneToMany(targetEntity=Path::class, mappedBy="ligne")
     */
    private $yes;

    /**
     * @ORM\OneToMany(targetEntity=Engine::class, mappedBy="ligne")
     */
    private $y;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
        $this->y = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getStartStation(): ?Station
    {
        return $this->StartStation;
    }

    public function setStartStation(?Station $StartStation): self
    {
        $this->StartStation = $StartStation;

        return $this;
    }

    public function getEndStation(): ?Station
    {
        return $this->endStation;
    }

    public function setEndStation(?Station $endStation): self
    {
        $this->endStation = $endStation;

        return $this;
    }

    public function getSite(): ?Site
    {
        return $this->Site;
    }

    public function setSite(?Site $Site): self
    {
        $this->Site = $Site;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->name;
    }

    /**
     * @return Collection|Path[]
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(Path $ye): self
    {
        if (!$this->yes->contains($ye)) {
            $this->yes[] = $ye;
            $ye->setLigne($this);
        }

        return $this;
    }

    public function removeYe(Path $ye): self
    {
        if ($this->yes->removeElement($ye)) {
            // set the owning side to null (unless already changed)
            if ($ye->getLigne() === $this) {
                $ye->setLigne(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Engine[]
     */
    public function getY(): Collection
    {
        return $this->y;
    }

    public function addY(Engine $y): self
    {
        if (!$this->y->contains($y)) {
            $this->y[] = $y;
            $y->setLigne($this);
        }

        return $this;
    }

    public function removeY(Engine $y): self
    {
        if ($this->y->removeElement($y)) {
            // set the owning side to null (unless already changed)
            if ($y->getLigne() === $this) {
                $y->setLigne(null);
            }
        }

        return $this;
    }
}
