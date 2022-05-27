<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spare
 *
 * @ORM\Table(name="spare", indexes={@ORM\Index(name="fk_spare_etatspare1", columns={"id_etatspare"}), @ORM\Index(name="fk_spare_sparecategorie1", columns={"id_categorie"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SpareRepository")
 */
class Spare
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_spare", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $reference = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroserie", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $numeroserie = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     */
    private $idCategorie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idDomaine = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_fournisseur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idFournisseur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idClasse = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_etatspare", type="integer", nullable=false)
     */
    private $idEtatspare;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_spareemplacement", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSpareemplacement = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sparetypeemplacement", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSparetypeemplacement = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sparemagasin", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSparemagasin = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sparecentre", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSparecentre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_sparesite", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSparesite = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_spareclient", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSpareclient = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_demandespare", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idDemandespare = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $date = 'NULL';

    public function getIdSpare(): ?int
    {
        return $this->idSpare;
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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getNumeroserie(): ?string
    {
        return $this->numeroserie;
    }

    public function setNumeroserie(?string $numeroserie): self
    {
        $this->numeroserie = $numeroserie;

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

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function setIdDomaine(?int $idDomaine): self
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    public function getIdFournisseur(): ?int
    {
        return $this->idFournisseur;
    }

    public function setIdFournisseur(?int $idFournisseur): self
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(?int $idClasse): self
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getIdEtatspare(): ?int
    {
        return $this->idEtatspare;
    }

    public function setIdEtatspare(int $idEtatspare): self
    {
        $this->idEtatspare = $idEtatspare;

        return $this;
    }

    public function getIdSpareemplacement(): ?int
    {
        return $this->idSpareemplacement;
    }

    public function setIdSpareemplacement(?int $idSpareemplacement): self
    {
        $this->idSpareemplacement = $idSpareemplacement;

        return $this;
    }

    public function getIdSparetypeemplacement(): ?int
    {
        return $this->idSparetypeemplacement;
    }

    public function setIdSparetypeemplacement(?int $idSparetypeemplacement): self
    {
        $this->idSparetypeemplacement = $idSparetypeemplacement;

        return $this;
    }

    public function getIdSparemagasin(): ?int
    {
        return $this->idSparemagasin;
    }

    public function setIdSparemagasin(?int $idSparemagasin): self
    {
        $this->idSparemagasin = $idSparemagasin;

        return $this;
    }

    public function getIdSparecentre(): ?int
    {
        return $this->idSparecentre;
    }

    public function setIdSparecentre(?int $idSparecentre): self
    {
        $this->idSparecentre = $idSparecentre;

        return $this;
    }

    public function getIdSparesite(): ?int
    {
        return $this->idSparesite;
    }

    public function setIdSparesite(?int $idSparesite): self
    {
        $this->idSparesite = $idSparesite;

        return $this;
    }

    public function getIdSpareclient(): ?int
    {
        return $this->idSpareclient;
    }

    public function setIdSpareclient(?int $idSpareclient): self
    {
        $this->idSpareclient = $idSpareclient;

        return $this;
    }

    public function getIdDemandespare(): ?int
    {
        return $this->idDemandespare;
    }

    public function setIdDemandespare(?int $idDemandespare): self
    {
        $this->idDemandespare = $idDemandespare;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
