<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Personnel
 *
 * @ORM\Table(name="personnel", indexes={@ORM\Index(name="fk_idrespo", columns={"idrespo"})})
 * @ORM\Entity
 */
class Personnel
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
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le Champ cin est obligatoire")
     * @Assert\Length(
     *     min=8,
     *     minMessage="Le cin doit au moins contenir 8 cacartères "
     * )
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le Champ Nom est obligatoire")
     * @Assert\Length(
     *     min=4,
     *     max=50,
     *     minMessage="Le  nom doit au moins contenir 4 cacartères ",
     *     maxMessage="Le  nom doit au moins contenir 50 cacartères "
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le Champ Prenom est obligatoire")
     * @Assert\Length(
     *     min=4,
     *     max=50,
     *     minMessage="Le  prenom doit au moins contenir 4 cacartères  ",
     *     maxMessage="Le  prenom doit au moins contenir 50 cacartères  "
     * )
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     *  @Assert\NotBlank(message="Le Champ adresse est obligatoire")
     * @Assert\Length(
     *     min=4,
     *     max=50,
     *     minMessage="L'adreese doit au moins contenir 4 cacartères  ",
     *     maxMessage="L'adresse doit au moins contenir 50 cacartères  "
     * )
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid
    email.")
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le Champ cin est obligatoire")
     * @Assert\Length(
     *     min=8,
     *     minMessage="Le numéro de telephone doit au moins contenir 8 cacartères  "
     * )
     */
    private $tel;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=false)
     * @Assert\NotBlank(message="Le Champ salaire est obligatoire")
     * @Assert\Length(
     *     min=3,
     *     minMessage="Le numéro de telephone doit au moins contenir 3 cacartères  "
     * )
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=150, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=0, nullable=false)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=0, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false)
     */
    private $role;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrespo", referencedColumnName="id")
     * })
     */
    private $idrespo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

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

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(string $sport): self
    {
        $this->sport = $sport;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getIdrespo(): ?Personne
    {
        return $this->idrespo;
    }

    public function setIdrespo(?Personne $idrespo): self
    {
        $this->idrespo = $idrespo;

        return $this;
    }


}
