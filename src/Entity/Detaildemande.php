<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detaildemande
 *
 * @ORM\Table(name="detaildemande", indexes={@ORM\Index(name="id_materiel", columns={"id_materiel"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\DetaildemandeRepository")
 */
class Detaildemande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_detaildemande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetaildemande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_demande", type="integer", nullable=false)
     */
    private $idDemande;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_demande", type="integer", nullable=false)
     */
    private $quantiteDemande;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_valide", type="integer", nullable=false)
     */
    private $quantiteValide;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_livre", type="integer", nullable=false)
     */
    private $quantiteLivre;

    /**
     * @var \Materiel
     *
     * @ORM\ManyToOne(targetEntity="Materiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_materiel", referencedColumnName="id_materiel")
     * })
     */
    private $idMateriel;

    public function getIdDetaildemande(): ?int
    {
        return $this->idDetaildemande;
    }

    public function getIdDemande(): ?int
    {
        return $this->idDemande;
    }

    public function setIdDemande(int $idDemande): self
    {
        $this->idDemande = $idDemande;

        return $this;
    }

    public function getQuantiteDemande(): ?int
    {
        return $this->quantiteDemande;
    }

    public function setQuantiteDemande(int $quantiteDemande): self
    {
        $this->quantiteDemande = $quantiteDemande;

        return $this;
    }

    public function getQuantiteValide(): ?int
    {
        return $this->quantiteValide;
    }

    public function setQuantiteValide(int $quantiteValide): self
    {
        $this->quantiteValide = $quantiteValide;

        return $this;
    }

    public function getQuantiteLivre(): ?int
    {
        return $this->quantiteLivre;
    }

    public function setQuantiteLivre(int $quantiteLivre): self
    {
        $this->quantiteLivre = $quantiteLivre;

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
