<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaine")
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\DomaineRepository")
 */
class Domaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_domaine", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nomDomaine = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_domaine", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descriptionDomaine = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function getNomDomaine(): ?string
    {
        return $this->nomDomaine;
    }

    public function setNomDomaine(?string $nomDomaine): self
    {
        $this->nomDomaine = $nomDomaine;

        return $this;
    }

    public function getDescriptionDomaine(): ?string
    {
        return $this->descriptionDomaine;
    }

    public function setDescriptionDomaine(?string $descriptionDomaine): self
    {
        $this->descriptionDomaine = $descriptionDomaine;

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
