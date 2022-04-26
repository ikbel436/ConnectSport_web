<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="fk_idpers", columns={"idpers"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=150, nullable=false)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpers", referencedColumnName="id")
     * })
     */
    private $idpers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="idc")
     */
    private $idp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idp = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdpers(): ?Personne
    {
        return $this->idpers;
    }

    public function setIdpers(?Personne $idpers): self
    {
        $this->idpers = $idpers;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getIdp(): Collection
    {
        return $this->idp;
    }

    public function addIdp(Produit $idp): self
    {
        if (!$this->idp->contains($idp)) {
            $this->idp[] = $idp;
            $idp->addIdc($this);
        }

        return $this;
    }

    public function removeIdp(Produit $idp): self
    {
        if ($this->idp->removeElement($idp)) {
            $idp->removeIdc($this);
        }

        return $this;
    }

}
