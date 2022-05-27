<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeactivite
 *
 * @ORM\Table(name="typeactivite")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TypeactiviteRepository")
 */
class Typeactivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_typeactivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_typeactivite", type="string", length=100, nullable=false)
     */
    private $nomTypeactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="code_typeactivite", type="string", length=5, nullable=false)
     */
    private $codeTypeactivite;

    public function getIdTypeactivite(): ?int
    {
        return $this->idTypeactivite;
    }

    public function getNomTypeactivite(): ?string
    {
        return $this->nomTypeactivite;
    }

    public function setNomTypeactivite(string $nomTypeactivite): self
    {
        $this->nomTypeactivite = $nomTypeactivite;

        return $this;
    }

    public function getCodeTypeactivite(): ?string
    {
        return $this->codeTypeactivite;
    }

    public function setCodeTypeactivite(string $codeTypeactivite): self
    {
        $this->codeTypeactivite = $codeTypeactivite;

        return $this;
    }


}
