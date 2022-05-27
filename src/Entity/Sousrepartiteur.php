<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sousrepartiteur
 *
 * @ORM\Table(name="sousrepartiteur", indexes={@ORM\Index(name="id_repartiteur", columns={"id_repartiteur"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SousrepartiteurRepository")
 */
class Sousrepartiteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sousrepartiteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousrepartiteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_sousrepartiteur", type="string", length=100, nullable=false)
     */
    private $nomSousrepartiteur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_repartiteur", type="integer", nullable=false)
     */
    private $idRepartiteur;

    public function getIdSousrepartiteur(): ?int
    {
        return $this->idSousrepartiteur;
    }

    public function getNomSousrepartiteur(): ?string
    {
        return $this->nomSousrepartiteur;
    }

    public function setNomSousrepartiteur(string $nomSousrepartiteur): self
    {
        $this->nomSousrepartiteur = $nomSousrepartiteur;

        return $this;
    }

    public function getIdRepartiteur(): ?int
    {
        return $this->idRepartiteur;
    }

    public function setIdRepartiteur(int $idRepartiteur): self
    {
        $this->idRepartiteur = $idRepartiteur;

        return $this;
    }


}
