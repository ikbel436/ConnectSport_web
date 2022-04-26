<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="fk_idresponsable", columns={"idr"}), @ORM\Index(name="fk_idpersonnel", columns={"idp"})})
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecontrat", type="date", nullable=false)
     */
    private $datecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idp", referencedColumnName="id")
     * })
     */
    private $idp;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idr", referencedColumnName="id")
     * })
     */
    private $idr;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDatecontrat(): ?\DateTimeInterface
    {
        return $this->datecontrat;
    }

    public function setDatecontrat(\DateTimeInterface $datecontrat): self
    {
        $this->datecontrat = $datecontrat;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdp(): ?Personnel
    {
        return $this->idp;
    }

    public function setIdp(?Personnel $idp): self
    {
        $this->idp = $idp;

        return $this;
    }

    public function getIdr(): ?Personne
    {
        return $this->idr;
    }

    public function setIdr(?Personne $idr): self
    {
        $this->idr = $idr;

        return $this;
    }


}
