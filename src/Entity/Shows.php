<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowRepository")
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class Shows
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateShow;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Act", inversedBy="shows")
     */
    private $acts;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $tarificationWeekEndRise;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarification", inversedBy="shows")
     */
    private $tarification;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Place", inversedBy="shows")
     */
    private $place;

    public function __construct()
    {
        $this->acts = new ArrayCollection();
        $this->tarification = new ArrayCollection();
        $this->place = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateShow(): ?\DateTimeInterface
    {
        return $this->dateShow;
    }

    public function setDateShow(\DateTimeInterface $dateShow): self
    {
        $this->dateShow = $dateShow;

        return $this;
    }

    /**
     * @return Collection|Act[]
     */
    public function getActs(): Collection
    {
        return $this->acts;
    }

    public function addAct(Act $act): self
    {
        if (!$this->acts->contains($act)) {
            $this->acts[] = $act;
        }

        return $this;
    }

    public function removeAct(Act $act): self
    {
        if ($this->acts->contains($act)) {
            $this->acts->removeElement($act);
        }

        return $this;
    }

    public function getTarificationWeekEndRise(): ?string
    {
        return $this->tarificationWeekEndRise;
    }

    public function setTarificationWeekEndRise(string $tarificationWeekEndRise): self
    {
        $this->tarificationWeekEndRise = $tarificationWeekEndRise;

        return $this;
    }

    public function getTarification(): ?Tarification
    {
        return $this->tarification;
    }

    public function setTarification(?Tarification $tarification): self
    {
        $this->tarification = $tarification;

        return $this;
    }

    /**
     * @return Collection|Place[]
     */
    public function getPlace(): Collection
    {
        return $this->place;
    }

    public function addPlace(Place $place): self
    {
        if (!$this->place->contains($place)) {
            $this->place[] = $place;
        }

        return $this;
    }

    public function removePlace(Place $place): self
    {
        if ($this->place->contains($place)) {
            $this->place->removeElement($place);
        }

        return $this;
    }
}
