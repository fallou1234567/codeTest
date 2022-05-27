<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="id_typeactivite", columns={"id_typeactivite"}), @ORM\Index(name="id_domaine", columns={"id_domaine"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_activite", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomActivite = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_activite", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $libelleActivite = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="validite", type="boolean", nullable=true, options={"default"="1"})
     */
    private $validite = true;

    /**
     * @var \Typeactivite
     *
     * @ORM\ManyToOne(targetEntity="Typeactivite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_typeactivite", referencedColumnName="id_typeactivite")
     * })
     */
    private $idTypeactivite;

    /**
     * @var \Domaine
     *
     * @ORM\ManyToOne(targetEntity="Domaine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domaine", referencedColumnName="id_domaine")
     * })
     */
    private $idDomaine;

    public function getIdActivite(): ?int
    {
        return $this->idActivite;
    }

    public function getNomActivite(): ?string
    {
        return $this->nomActivite;
    }

    public function setNomActivite(string $nomActivite): self
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    public function getLibelleActivite(): ?string
    {
        return $this->libelleActivite;
    }

    public function setLibelleActivite(?string $libelleActivite): self
    {
        $this->libelleActivite = $libelleActivite;

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

    public function getIdTypeactivite(): ?Typeactivite
    {
        return $this->idTypeactivite;
    }

    public function setIdTypeactivite(?Typeactivite $idTypeactivite): self
    {
        $this->idTypeactivite = $idTypeactivite;

        return $this;
    }

    public function getIdDomaine(): ?Domaine
    {
        return $this->idDomaine;
    }

    public function setIdDomaine(?Domaine $idDomaine): self
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }


}
