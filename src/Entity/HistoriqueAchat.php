<?php

namespace App\Entity;

use App\Entity\User;
use DateTimeInterface;
use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoriqueAchatRepository")
 */
class HistoriqueAchat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;    

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="historiqueAchats")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="historiqueAchats")
     */
    private $produit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateAchat;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_limite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EtatH;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->DateAchat;
    }

    public function setDateAchat(\DateTimeInterface $DateAchat): self
    {
        $this->DateAchat = $DateAchat;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getDateLimite(): ?\DateTimeInterface
    {
        return $this->date_limite;
    }

    public function setDateLimite(?\DateTimeInterface $date_limite): self
    {
        $this->date_limite = $date_limite;

        return $this;
    }

    public function getEtatH(): ?string
    {
        return $this->EtatH;
    }

    public function setEtatH(?string $EtatH): self
    {
        $this->EtatH = $EtatH;

        return $this;
    }
}
