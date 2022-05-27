<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatspare
 *
 * @ORM\Table(name="etatspare")
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\EtatspareRepository")
 */
class Etatspare
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_etatspare", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatspare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    public function getIdEtatspare(): ?int
    {
        return $this->idEtatspare;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
