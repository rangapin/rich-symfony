<?php

namespace App\Entity;

use App\Repository\StatisticRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatisticRepository::class)
 */
class Statistic
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $exp_cat;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cat_total;

    /**
     * @ORM\Column(type="datetime")
     */
    private $exp_createdAt;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $exp_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpCat(): ?string
    {
        return $this->exp_cat;
    }

    public function setExpCat(string $exp_cat): self
    {
        $this->exp_cat = $exp_cat;

        return $this;
    }

    public function getCatTotal(): ?string
    {
        return $this->cat_total;
    }

    public function setCatTotal(string $cat_total): self
    {
        $this->cat_total = $cat_total;

        return $this;
    }

    public function getExpCreatedAt(): ?\DateTimeInterface
    {
        return $this->exp_createdAt;
    }

    public function setExpCreatedAt(\DateTimeInterface $exp_createdAt): self
    {
        $this->exp_createdAt = $exp_createdAt;

        return $this;
    }

    public function getExpAmount(): ?string
    {
        return $this->exp_amount;
    }

    public function setExpAmount(string $exp_amount): self
    {
        $this->exp_amount = $exp_amount;

        return $this;
    }
}
