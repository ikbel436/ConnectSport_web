<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magasin
 *
 * @ORM\Table(name="magasin", indexes={@ORM\Index(name="fk_idps", columns={"idps"})})
 * @ORM\Entity
 */
class Magasin
{
    /**
     * @var int
     *
     * @ORM\Column(name="idm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idm;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrebloc", type="integer", nullable=false)
     */
    private $nombrebloc;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idps", referencedColumnName="id")
     * })
     */
    private $idps;

    public function getIdm(): ?int
    {
        return $this->idm;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getNombrebloc(): ?int
    {
        return $this->nombrebloc;
    }

    public function setNombrebloc(int $nombrebloc): self
    {
        $this->nombrebloc = $nombrebloc;

        return $this;
    }

    public function getIdps(): ?Personne
    {
        return $this->idps;
    }

    public function setIdps(?Personne $idps): self
    {
        $this->idps = $idps;

        return $this;
    }


}
