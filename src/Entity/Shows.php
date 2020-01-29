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
     * @ORM\OneToMany(targetEntity="App\Entity\Tarification", mappedBy="shows")
     */
    private $tarification;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $tarificationWeekEndRise;

    public function __construct()
    {
        $this->acts = new ArrayCollection();
        $this->tarification = new ArrayCollection();
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

    /**
     * @return Collection|Tarification[]
     */
    public function getTarification(): Collection
    {
        return $this->tarification;
    }

    public function addTarification(Tarification $tarification): self
    {
        if (!$this->tarification->contains($tarification)) {
            $this->tarification[] = $tarification;
            $tarification->setShows($this);
        }

        return $this;
    }

    public function removeTarification(Tarification $tarification): self
    {
        if ($this->tarification->contains($tarification)) {
            $this->tarification->removeElement($tarification);
            // set the owning side to null (unless already changed)
            if ($tarification->getShows() === $this) {
                $tarification->setShows(null);
            }
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
}
