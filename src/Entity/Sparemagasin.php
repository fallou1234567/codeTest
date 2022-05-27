<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sparemagasin
 *
 * @ORM\Table(name="sparemagasin", indexes={@ORM\Index(name="fk_sparemagasin_centre1", columns={"id_centre"}), @ORM\Index(name="fk_sparemagasin_utilisateur1", columns={"id_utilisateur"})})
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\SparemagasinRepository")
 */
class Sparemagasin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sparemagasin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSparemagasin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     */
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=false)
     */
    private $idCentre;

    public function getIdSparemagasin(): ?int
    {
        return $this->idSparemagasin;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(int $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function setIdCentre(int $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }


}
