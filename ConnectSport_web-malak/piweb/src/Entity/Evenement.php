<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fk_id", columns={"ids"}), @ORM\Index(name="fk_idpp", columns={"idpp"})})
 * @ORM\Entity
 */
class Evenement
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Nom is required")
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="doit contenir au moins 3 carcatères ",
     *     maxMessage="doit contenir au plus 20 carcatères"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Lieu is required")
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="doit contenir au moins 3 carcatères ",
     *     maxMessage="doit contenir au plus 20 carcatères"
     * )
     */
    private $lieu;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\GreaterThanOrEqual("today",
    message="La date  doit être supérieure à la date d'aujourd'hui")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbparticipation", type="integer", nullable=false)

     */
    private $nbparticipation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Description is required")
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="doit contenir au moins 3 carcatères ",
     *     maxMessage="doit contenir au plus 50 carcatères"
     * )
     */

    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     * @Assert\NotBlank(message="prix is required")
     * @Assert\Length(
     *     max=4,
     *     minMessage="doit contenir au plus 4 carcatères ")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=false)
     */
    private $image;

    /**
     * @var \Sponsor
     *
     * @ORM\ManyToOne(targetEntity="Sponsor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ids", referencedColumnName="id")
     * })
     */
    private $ids;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpp", referencedColumnName="id")
     * })
     */
    private $idpp;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
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

    public function getNbparticipation(): ?int
    {
        return $this->nbparticipation;
    }

    public function setNbparticipation(int $nbparticipation): self
    {
        $this->nbparticipation = $nbparticipation;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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

    public function getIds(): ?Sponsor
    {
        return $this->ids;
    }

    public function setIds(?Sponsor $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function getIdpp(): ?Personne
    {
        return $this->idpp;
    }

    public function setIdpp(?Personne $idpp): self
    {
        $this->idpp = $idpp;

        return $this;
    }


}
