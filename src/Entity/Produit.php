<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date_Limite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Sucre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Sel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Proteine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Fibre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Energie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Gras;

   /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Taux_Additif;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompoRecette", mappedBy="produit")
     */
    private $compoRecettes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\HistoriqueAchat", mappedBy="produit")
     */
    private $historiqueAchats;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taux_calcium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taux_sodium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nutriscore_grade;

    public function __construct()
    {
        $this->historiqueAchats = new ArrayCollection();
        $this->compoRecettes = new ArrayCollection();
    }


    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(string $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDateLimite(): ?\DateTimeInterface
    {
        return $this->Date_Limite;
    }

    public function setDateLimite(\DateTimeInterface $Date_Limite): self
    {
        $this->Date_Limite = $Date_Limite;

        return $this;
    }

    public function getTauxSucre(): ?string
    {
        return $this->Taux_Sucre;
    }

    public function setTauxSucre(?string $Taux_Sucre): self
    {
        $this->Taux_Sucre = $Taux_Sucre;

        return $this;
    }

    public function getTauxSel(): ?string
    {
        return $this->Taux_Sel;
    }

    public function setTauxSel(?string $Taux_Sel): self
    {
        $this->Taux_Sel = $Taux_Sel;

        return $this;
    }

    public function getTauxProteine(): ?string
    {
        return $this->Taux_Proteine;
    }

    public function setTauxProteine(?string $Taux_Proteine): self
    {
        $this->Taux_Proteine = $Taux_Proteine;

        return $this;
    }

    public function getTauxFibre(): ?string
    {
        return $this->Taux_Fibre;
    }

    public function setTauxFibre(?string $Taux_Fibre): self
    {
        $this->Taux_Fibre = $Taux_Fibre;

        return $this;
    }

    public function getTauxEnergie(): ?string
    {
        return $this->Taux_Energie;
    }

    public function setTauxEnergie(?string $Taux_Energie): self
    {
        $this->Taux_Energie = $Taux_Energie;

        return $this;
    }

    public function getTauxGras(): ?string
    {
        return $this->Taux_Gras;
    }

    public function setTauxGras(?string $Taux_Gras): self
    {
        $this->Taux_Gras = $Taux_Gras;

        return $this;
    }

    public function getNutriscore(): ?string
    {
        return $this->Nutriscore;
    }

    public function setNutriscore(?string $Nutriscore): self
    {
        $this->Nutriscore = $Nutriscore;

        return $this;
    }

    public function getTauxAdditif(): ?string
    {
        return $this->Taux_Additif;
    }

    public function setTauxAdditif(?string $Taux_Additif): self
    {
        $this->Taux_Additif = $Taux_Additif;

        return $this;
    }

    /**
     * @return Collection|CompoRecette[]
     */
    public function getCompoRecettes(): Collection
    {
        return $this->compoRecettes;
    }

    public function addCompoRecette(CompoRecette $compoRecette): self
    {
        if (!$this->compoRecettes->contains($compoRecette)) {
            $this->compoRecettes[] = $compoRecette;
            $compoRecette->setProduit($this);
        }

        return $this;
    }

    public function removeCompoRecette(CompoRecette $compoRecette): self
    {
        if ($this->compoRecettes->contains($compoRecette)) {
            $this->compoRecettes->removeElement($compoRecette);
            // set the owning side to null (unless already changed)
            if ($compoRecette->getProduit() === $this) {
                $compoRecette->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|HistoriqueAchat[]
     */
    public function getHistoriqueAchats(): Collection
    {
        return $this->historiqueAchats;
    }

    public function addHistoriqueAchat(HistoriqueAchat $historiqueAchat): self
    {
        if (!$this->historiqueAchats->contains($historiqueAchat)) {
            $this->historiqueAchats[] = $historiqueAchat;
            $historiqueAchat->setProduit($this);
        }

        return $this;
    }

    public function removeHistoriqueAchat(HistoriqueAchat $historiqueAchat): self
    {
        if ($this->historiqueAchats->contains($historiqueAchat)) {
            $this->historiqueAchats->removeElement($historiqueAchat);
            // set the owning side to null (unless already changed)
            if ($historiqueAchat->getProduit() === $this) {
                $historiqueAchat->setProduit(null);
            }
        }

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getTauxCalcium(): ?string
    {
        return $this->taux_calcium;
    }

    public function setTauxCalcium(?string $taux_calcium): self
    {
        $this->taux_calcium = $taux_calcium;

        return $this;
    }

    public function getTauxSodium(): ?string
    {
        return $this->taux_sodium;
    }

    public function setTauxSodium(?string $taux_sodium): self
    {
        $this->taux_sodium = $taux_sodium;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNutriscoreGrade(): ?string
    {
        return $this->nutriscore_grade;
    }

    public function setNutriscoreGrade(?string $nutriscore_grade): self
    {
        $this->nutriscore_grade = $nutriscore_grade;

        return $this;
    }

}
