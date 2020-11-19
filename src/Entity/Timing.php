<?php

namespace App\Entity;

use App\Repository\TimingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimingRepository::class)
 */
class Timing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Engine::class, inversedBy="yes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $engine;

    /**
     * @ORM\ManyToOne(targetEntity=Path::class, inversedBy="y")
     * @ORM\JoinColumn(nullable=false)
     */
    private $path;

    /**
     * @ORM\Column(type="time")
     */
    private $arrival_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEngine(): ?Engine
    {
        return $this->engine;
    }

    public function setEngine(?Engine $engine): self
    {
        $this->engine = $engine;

        return $this;
    }

    public function getPath(): ?Path
    {
        return $this->path;
    }

    public function setPath(?Path $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getArrivalAt(): ?\DateTimeInterface
    {
        return $this->arrival_at;
    }

    public function setArrivalAt(\DateTimeInterface $arrival_at): self
    {
        $this->arrival_at = $arrival_at;

        return $this;
    }
}
