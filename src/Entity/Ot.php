<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ot
 *
 * @ORM\Table(name="ot", indexes={@ORM\Index(name="telephone_ot", columns={"telephone_ot"}), @ORM\Index(name="id_soustraitant", columns={"id_soustraitant"}), @ORM\Index(name="id_lot", columns={"id_lot"}), @ORM\Index(name="id_distant", columns={"id_distant"}), @ORM\Index(name="id_equipe", columns={"id_equipe"}), @ORM\Index(name="id_activite", columns={"id_activite"}), @ORM\Index(name="id_sousrepartiteur", columns={"id_sousrepartiteur"}), @ORM\Index(name="ndem_ot", columns={"ndem_ot"}), @ORM\Index(name="id_centre", columns={"id_centre"}), @ORM\Index(name="id_site", columns={"id_site"}), @ORM\Index(name="id_etatot", columns={"id_etatot"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\OtRepository")
 */
class Ot
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOt;

    /**
     * @var string
     *
     * @ORM\Column(name="ndem_ot", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $ndemOt = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_ot", type="string", length=100, nullable=false)
     */
    private $telephoneOt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="decharge_ot", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $dechargeOt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="marche_ot", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $marcheOt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cause_ot", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $causeOt = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_intervention", type="date", nullable=false)
     */
    private $dateIntervention;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idEquipe = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idCentre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_soustraitant", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSoustraitant = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idActivite = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_site", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSite = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_lot", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idLot = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sousrepartiteur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSousrepartiteur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_distant", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idDistant = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="montant", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $montant = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_etatot", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idEtatot = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_ot", type="text", length=65535, nullable=false)
     */
    private $commentaireOt;

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdOt(): ?int
    {
        return $this->idOt;
    }

    public function getNdemOt(): ?string
    {
        return $this->ndemOt;
    }

    public function setNdemOt(string $ndemOt): self
    {
        $this->ndemOt = $ndemOt;

        return $this;
    }

    public function getTelephoneOt(): ?string
    {
        return $this->telephoneOt;
    }

    public function setTelephoneOt(string $telephoneOt): self
    {
        $this->telephoneOt = $telephoneOt;

        return $this;
    }

    public function getDechargeOt(): ?string
    {
        return $this->dechargeOt;
    }

    public function setDechargeOt(?string $dechargeOt): self
    {
        $this->dechargeOt = $dechargeOt;

        return $this;
    }

    public function getMarcheOt(): ?string
    {
        return $this->marcheOt;
    }

    public function setMarcheOt(?string $marcheOt): self
    {
        $this->marcheOt = $marcheOt;

        return $this;
    }

    public function getCauseOt(): ?string
    {
        return $this->causeOt;
    }

    public function setCauseOt(?string $causeOt): self
    {
        $this->causeOt = $causeOt;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateIntervention(): ?\DateTimeInterface
    {
        return $this->dateIntervention;
    }

    public function setDateIntervention(\DateTimeInterface $dateIntervention): self
    {
        $this->dateIntervention = $dateIntervention;

        return $this;
    }

    public function getIdEquipe(): ?int
    {
        return $this->idEquipe;
    }

    public function setIdEquipe(?int $idEquipe): self
    {
        $this->idEquipe = $idEquipe;

        return $this;
    }

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function setIdCentre(?int $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }

    public function getIdSoustraitant(): ?int
    {
        return $this->idSoustraitant;
    }

    public function setIdSoustraitant(?int $idSoustraitant): self
    {
        $this->idSoustraitant = $idSoustraitant;

        return $this;
    }

    public function getIdActivite(): ?int
    {
        return $this->idActivite;
    }

    public function setIdActivite(?int $idActivite): self
    {
        $this->idActivite = $idActivite;

        return $this;
    }

    public function getIdSite(): ?int
    {
        return $this->idSite;
    }

    public function setIdSite(?int $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function getIdLot(): ?int
    {
        return $this->idLot;
    }

    public function setIdLot(?int $idLot): self
    {
        $this->idLot = $idLot;

        return $this;
    }

    public function getIdSousrepartiteur(): ?int
    {
        return $this->idSousrepartiteur;
    }

    public function setIdSousrepartiteur(?int $idSousrepartiteur): self
    {
        $this->idSousrepartiteur = $idSousrepartiteur;

        return $this;
    }

    public function getIdDistant(): ?int
    {
        return $this->idDistant;
    }

    public function setIdDistant(?int $idDistant): self
    {
        $this->idDistant = $idDistant;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getIdEtatot(): ?int
    {
        return $this->idEtatot;
    }

    public function setIdEtatot(?int $idEtatot): self
    {
        $this->idEtatot = $idEtatot;

        return $this;
    }

    public function getCommentaireOt(): ?string
    {
        return $this->commentaireOt;
    }

    public function setCommentaireOt(string $commentaireOt): self
    {
        $this->commentaireOt = $commentaireOt;

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
