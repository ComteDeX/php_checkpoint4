<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TarificationRepository")
 */
class Tarification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $adult;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $kid;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $groupPrice;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $school;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Shows", inversedBy="tarification")
     */
    private $shows;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdult(): ?string
    {
        return $this->adult;
    }

    public function setAdult(string $adult): self
    {
        $this->adult = $adult;

        return $this;
    }

    public function getKid(): ?string
    {
        return $this->kid;
    }

    public function setKid(string $kid): self
    {
        $this->kid = $kid;

        return $this;
    }

    public function getGroupPrice(): ?string
    {
        return $this->groupPrice;
    }

    public function setGroupPrice(string $groupPrice): self
    {
        $this->groupPrice = $groupPrice;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): self
    {
        $this->school = $school;

        return $this;
    }

    public function getShows(): ?Shows
    {
        return $this->shows;
    }

    public function setShows(?Shows $shows): self
    {
        $this->shows = $shows;

        return $this;
    }
}
