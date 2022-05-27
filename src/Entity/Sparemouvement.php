<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sparemouvement
 *
 * @ORM\Table(name="sparemouvement", indexes={@ORM\Index(name="fk_sparemouvement_utilisateur1", columns={"id_utilisateur"}), @ORM\Index(name="fk_sparemouvement_sparemagasin1", columns={"id_sparemagasin"}), @ORM\Index(name="fk_sparemouvement_typemouvement1", columns={"id_typemouvement"}), @ORM\Index(name="fk_sparemouvement_spare1", columns={"id_spare"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SparemouvementRepository")
 */
class Sparemouvement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sparemouvement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSparemouvement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $motif = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $commentaire = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datemouvement", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datemouvement = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_typemouvement", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idTypemouvement = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idUtilisateur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sparemagasin", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSparemagasin = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_spare", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSpare = NULL;

    public function getIdSparemouvement(): ?int
    {
        return $this->idSparemouvement;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDatemouvement(): ?\DateTimeInterface
    {
        return $this->datemouvement;
    }

    public function setDatemouvement(?\DateTimeInterface $datemouvement): self
    {
        $this->datemouvement = $datemouvement;

        return $this;
    }

    public function getIdTypemouvement(): ?int
    {
        return $this->idTypemouvement;
    }

    public function setIdTypemouvement(?int $idTypemouvement): self
    {
        $this->idTypemouvement = $idTypemouvement;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?int $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdSparemagasin(): ?int
    {
        return $this->idSparemagasin;
    }

    public function setIdSparemagasin(?int $idSparemagasin): self
    {
        $this->idSparemagasin = $idSparemagasin;

        return $this;
    }

    public function getIdSpare(): ?int
    {
        return $this->idSpare;
    }

    public function setIdSpare(?int $idSpare): self
    {
        $this->idSpare = $idSpare;

        return $this;
    }


}
