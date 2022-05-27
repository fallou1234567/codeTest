<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magasin
 *
 * @ORM\Table(name="magasin", indexes={@ORM\Index(name="responsable_magasin", columns={"responsable_magasin"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MagansinRepository")
 */
class Magasin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_magasin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_magasin", type="string", length=100, nullable=false)
     */
    private $nomMagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="description_magasin", type="text", length=65535, nullable=false)
     */
    private $descriptionMagasin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="responsable_magasin", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $responsableMagasin = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdMagasin(): ?int
    {
        return $this->idMagasin;
    }

    public function getNomMagasin(): ?string
    {
        return $this->nomMagasin;
    }

    public function setNomMagasin(string $nomMagasin): self
    {
        $this->nomMagasin = $nomMagasin;

        return $this;
    }

    public function getDescriptionMagasin(): ?string
    {
        return $this->descriptionMagasin;
    }

    public function setDescriptionMagasin(string $descriptionMagasin): self
    {
        $this->descriptionMagasin = $descriptionMagasin;

        return $this;
    }

    public function getResponsableMagasin(): ?int
    {
        return $this->responsableMagasin;
    }

    public function setResponsableMagasin(?int $responsableMagasin): self
    {
        $this->responsableMagasin = $responsableMagasin;

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
