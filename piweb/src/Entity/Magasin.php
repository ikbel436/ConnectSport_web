<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Magasin
 *
 * @ORM\Table(name="magasin")
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
     * @Assert\NotBlank(message="Le Champ nom est obligatoire")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le Champ nadresse est obligatoire")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrebloc", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le Champ nombrebloc est obligatoire")
     */
    private $nombrebloc;



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

    protected $captchaCode;

    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }


}
