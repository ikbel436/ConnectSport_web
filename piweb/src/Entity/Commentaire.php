<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


use  Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_id_respo", columns={"id_per"}), @ORM\Index(name="fk_id_act", columns={"id_act"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="comment", type="string", length=100, nullable=false)
     */
    private $comment;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="date", nullable=false)
     */
    private $dateajout;



    /**
     * @var \Actualite
     *
     * @ORM\ManyToOne(targetEntity="Actualite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_act", referencedColumnName="id")
     * })
     */
    private $idAct;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_per", referencedColumnName="id")
     * })
     */
    private $idPer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

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





    public function getIdAct(): ?Actualite
    {
        return $this->idAct;
    }

    public function setIdAct(?Actualite $idAct): self
    {
        $this->idAct = $idAct;

        return $this;
    }

    public function getIdPer(): ?Personne
    {
        return $this->idPer;
    }

    public function setIdPer(?Personne $idPer): self
    {
        $this->idPer = $idPer;

        return $this;
    }


}
