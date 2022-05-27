<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materielutilise
 *
 * @ORM\Table(name="materielutilise", indexes={@ORM\Index(name="id_materiel", columns={"id_materiel"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MaterielutiliseRepository")
 */
class Materielutilise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_materielutilise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaterielutilise;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ot", type="integer", nullable=false)
     */
    private $idOt;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Materiel
     *
     * @ORM\ManyToOne(targetEntity="Materiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_materiel", referencedColumnName="id_materiel")
     * })
     */
    private $idMateriel;

    public function getIdMaterielutilise(): ?int
    {
        return $this->idMaterielutilise;
    }

    public function getIdOt(): ?int
    {
        return $this->idOt;
    }

    public function setIdOt(int $idOt): self
    {
        $this->idOt = $idOt;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdMateriel(): ?Materiel
    {
        return $this->idMateriel;
    }

    public function setIdMateriel(?Materiel $idMateriel): self
    {
        $this->idMateriel = $idMateriel;

        return $this;
    }


}
