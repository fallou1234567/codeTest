<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatdemande
 *
 * @ORM\Table(name="etatdemande")
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\EtatdemandeRepository")
 */
class Etatdemande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_etatdemande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatdemande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_etatdemande", type="string", length=100, nullable=false)
     */
    private $nomEtatdemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_etatdemande", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descriptionEtatdemande = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdEtatdemande(): ?int
    {
        return $this->idEtatdemande;
    }

    public function getNomEtatdemande(): ?string
    {
        return $this->nomEtatdemande;
    }

    public function setNomEtatdemande(string $nomEtatdemande): self
    {
        $this->nomEtatdemande = $nomEtatdemande;

        return $this;
    }

    public function getDescriptionEtatdemande(): ?string
    {
        return $this->descriptionEtatdemande;
    }

    public function setDescriptionEtatdemande(?string $descriptionEtatdemande): self
    {
        $this->descriptionEtatdemande = $descriptionEtatdemande;

        return $this;
    }

    public function isValidite(): ?bool
    {
        return $this->validite;
    }

    public function setValidite(bool $validite): self
    {
        $this->validite = $validite;

        return $this;
    }


}
