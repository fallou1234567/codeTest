<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unite
 *
 * @ORM\Table(name="unite")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UniteRepository")
 */
class Unite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_unite", type="string", length=50, nullable=false)
     */
    private $nomUnite;

    public function getIdUnite(): ?int
    {
        return $this->idUnite;
    }

    public function getNomUnite(): ?string
    {
        return $this->nomUnite;
    }

    public function setNomUnite(string $nomUnite): self
    {
        $this->nomUnite = $nomUnite;

        return $this;
    }


}
