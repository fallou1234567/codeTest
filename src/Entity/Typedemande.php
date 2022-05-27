<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedemande
 *
 * @ORM\Table(name="typedemande")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TypedemandeRepository")
 */
class Typedemande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_typedemande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypedemande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_typedemande", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomTypedemande = '\'\'';

    public function getIdTypedemande(): ?int
    {
        return $this->idTypedemande;
    }

    public function getNomTypedemande(): ?string
    {
        return $this->nomTypedemande;
    }

    public function setNomTypedemande(string $nomTypedemande): self
    {
        $this->nomTypedemande = $nomTypedemande;

        return $this;
    }


}
