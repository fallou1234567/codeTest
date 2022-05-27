<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AgenceRepository")
 */
class Agence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_agence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_agence", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomAgence = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_agence", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descriptionAgence = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="validite", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $validite = 'NULL';

    public function getIdAgence(): ?int
    {
        return $this->idAgence;
    }

    public function getNomAgence(): ?string
    {
        return $this->nomAgence;
    }

    public function setNomAgence(string $nomAgence): self
    {
        $this->nomAgence = $nomAgence;

        return $this;
    }

    public function getDescriptionAgence(): ?string
    {
        return $this->descriptionAgence;
    }

    public function setDescriptionAgence(?string $descriptionAgence): self
    {
        $this->descriptionAgence = $descriptionAgence;

        return $this;
    }

    public function getValidite(): ?string
    {
        return $this->validite;
    }

    public function setValidite(?string $validite): self
    {
        $this->validite = $validite;

        return $this;
    }


}
