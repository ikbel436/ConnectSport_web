<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fkk_idpper", columns={"idperso"}), @ORM\Index(name="fk_idm", columns={"idm"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_p", type="string", length=100, nullable=false)
     */
    private $nomP;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=0, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=0, nullable=false)
     */
    private $image;

    /**
     * @var \Magasin
     *
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idm", referencedColumnName="idm")
     * })
     */
    private $idm;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idperso", referencedColumnName="id")
     * })
     */
    private $idperso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", inversedBy="idp")
     * @ORM\JoinTable(name="lignecommande",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idp", referencedColumnName="idp")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idc", referencedColumnName="idc")
     *   }
     * )
     */
    private $idc;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idc = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): self
    {
        $this->nomP = $nomP;

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

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdm(): ?Magasin
    {
        return $this->idm;
    }

    public function setIdm(?Magasin $idm): self
    {
        $this->idm = $idm;

        return $this;
    }

    public function getIdperso(): ?Personne
    {
        return $this->idperso;
    }

    public function setIdperso(?Personne $idperso): self
    {
        $this->idperso = $idperso;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getIdc(): Collection
    {
        return $this->idc;
    }

    public function addIdc(Commande $idc): self
    {
        if (!$this->idc->contains($idc)) {
            $this->idc[] = $idc;
        }

        return $this;
    }

    public function removeIdc(Commande $idc): self
    {
        $this->idc->removeElement($idc);

        return $this;
    }

}
