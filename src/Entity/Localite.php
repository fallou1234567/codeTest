<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\LoacliteRepository")
 */
class Localite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_localite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_localite", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomLocalite = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_localite", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelleLocalite = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="coef_localite", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $coefLocalite = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdLocalite(): ?int
    {
        return $this->idLocalite;
    }

    public function getNomLocalite(): ?string
    {
        return $this->nomLocalite;
    }

    public function setNomLocalite(string $nomLocalite): self
    {
        $this->nomLocalite = $nomLocalite;

        return $this;
    }

    public function getLibelleLocalite(): ?string
    {
        return $this->libelleLocalite;
    }

    public function setLibelleLocalite(?string $libelleLocalite): self
    {
        $this->libelleLocalite = $libelleLocalite;

        return $this;
    }

    public function getCoefLocalite(): ?float
    {
        return $this->coefLocalite;
    }

    public function setCoefLocalite(?float $coefLocalite): self
    {
        $this->coefLocalite = $coefLocalite;

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
