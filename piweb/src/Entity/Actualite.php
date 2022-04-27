<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use  Symfony\Component\Validator\Constraints as Assert;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="fkidresp", columns={"idres"})})
 * @ORM\Entity
 */
class Actualite
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
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     *  @Assert\NotBlank(message="Le Champ titre est obligatoire")
     * @Assert\Length(
     *     min=5,
     *     minMessage="Le titre doit au moins contenir 5 cacartères "
     * )
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     *  @Assert\NotBlank(message="Le Champ description est obligatoire")
     * @Assert\Length(
     *     min=8,
     *     minMessage="Le titre doit au moins contenir 8 cacartères "
     * )
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="date", nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=0, nullable=false) @Assert\NotBlank(message="Le Champ image est obligatoire")
     *
     */
    private $image;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idres", referencedColumnName="id")
     * })
     */
    private $idres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateajout(): \DateTime
    {
        return $this->dateajout;
    }

    /**
     * @param \DateTime $dateajout
     */
    public function setDateajout(\DateTime $dateajout): void
    {
        $this->dateajout = $dateajout;
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

    public function getIdres(): ?Personne
    {
        return $this->idres;
    }

    public function setIdres(?Personne $idres): self
    {
        $this->idres = $idres;

        return $this;
    }


}
