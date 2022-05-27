<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiel
 *
 * @ORM\Table(name="materiel", indexes={@ORM\Index(name="id_domaine", columns={"id_domaine"}), @ORM\Index(name="unite", columns={"id_unite"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MaterielRepository")
 */
class Materiel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_materiel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_materiel", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomMateriel = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference_oracle", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $referenceOracle = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="id_unite", type="integer", nullable=false)
     */
    private $idUnite;

    /**
     * @var float
     *
     * @ORM\Column(name="tolerence", type="float", precision=10, scale=0, nullable=false)
     */
    private $tolerence;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     */
    private $idDomaine;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="validite", type="boolean", nullable=true, options={"default"="1"})
     */
    private $validite = true;

    public function getIdMateriel(): ?int
    {
        return $this->idMateriel;
    }

    public function getNomMateriel(): ?string
    {
        return $this->nomMateriel;
    }

    public function setNomMateriel(string $nomMateriel): self
    {
        $this->nomMateriel = $nomMateriel;

        return $this;
    }

    public function getReferenceOracle(): ?string
    {
        return $this->referenceOracle;
    }

    public function setReferenceOracle(?string $referenceOracle): self
    {
        $this->referenceOracle = $referenceOracle;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdUnite(): ?int
    {
        return $this->idUnite;
    }

    public function setIdUnite(int $idUnite): self
    {
        $this->idUnite = $idUnite;

        return $this;
    }

    public function getTolerence(): ?float
    {
        return $this->tolerence;
    }

    public function setTolerence(float $tolerence): self
    {
        $this->tolerence = $tolerence;

        return $this;
    }

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function setIdDomaine(int $idDomaine): self
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    public function isValidite(): ?bool
    {
        return $this->validite;
    }

    public function setValidite(?bool $validite): self
    {
        $this->validite = $validite;

        return $this;
    }


}
