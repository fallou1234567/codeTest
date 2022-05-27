<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_centre", columns={"id_centre"}), @ORM\Index(name="id_site", columns={"id_site"}), @ORM\Index(name="id_etatdemande", columns={"id_etatdemande"}), @ORM\Index(name="id_soustraitant", columns={"id_soustraitant"}), @ORM\Index(name="id_activite", columns={"id_activite"}), @ORM\Index(name="id_magasin", columns={"id_magasin"}), @ORM\Index(name="id_typedemande", columns={"id_typedemande"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\DemandeRepository")
 */
class Demande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_demande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_demande", type="string", length=100, nullable=true, options={"default"="''"})
     */
    private $numeroDemande = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="client", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $client = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="identifiant_client", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $identifiantClient = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idEquipe = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="demandeur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $demandeur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="validateur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $validateur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="livreur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $livreur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annulateur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $annulateur = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modificateur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $modificateur = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="marche", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $marche = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="num_oracle", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $numOracle = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="num_cons", type="string", length=100, nullable=false)
     */
    private $numCons;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $motif = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_demande", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateDemande = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validation", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateValidation = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_livraison", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateLivraison = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_annulation", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateAnnulation = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="date_modification", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dateModification = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    /**
     * @var \Typedemande
     *
     * @ORM\ManyToOne(targetEntity="Typedemande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_typedemande", referencedColumnName="id_typedemande")
     * })
     */
    private $idTypedemande;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    /**
     * @var \Magasin
     *
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_magasin", referencedColumnName="id_magasin")
     * })
     */
    private $idMagasin;

    /**
     * @var \Soustraitant
     *
     * @ORM\ManyToOne(targetEntity="Soustraitant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_soustraitant", referencedColumnName="id_soustraitant")
     * })
     */
    private $idSoustraitant;

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_activite", referencedColumnName="id_activite")
     * })
     */
    private $idActivite;

    /**
     * @var \Etatdemande
     *
     * @ORM\ManyToOne(targetEntity="Etatdemande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etatdemande", referencedColumnName="id_etatdemande")
     * })
     */
    private $idEtatdemande;

    /**
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site", referencedColumnName="id_site")
     * })
     */
    private $idSite;

    public function getIdDemande(): ?int
    {
        return $this->idDemande;
    }

    public function getNumeroDemande(): ?string
    {
        return $this->numeroDemande;
    }

    public function setNumeroDemande(?string $numeroDemande): self
    {
        $this->numeroDemande = $numeroDemande;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getIdentifiantClient(): ?string
    {
        return $this->identifiantClient;
    }

    public function setIdentifiantClient(?string $identifiantClient): self
    {
        $this->identifiantClient = $identifiantClient;

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

    public function getDemandeur(): ?int
    {
        return $this->demandeur;
    }

    public function setDemandeur(?int $demandeur): self
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    public function getValidateur(): ?int
    {
        return $this->validateur;
    }

    public function setValidateur(?int $validateur): self
    {
        $this->validateur = $validateur;

        return $this;
    }

    public function getLivreur(): ?int
    {
        return $this->livreur;
    }

    public function setLivreur(?int $livreur): self
    {
        $this->livreur = $livreur;

        return $this;
    }

    public function getAnnulateur(): ?int
    {
        return $this->annulateur;
    }

    public function setAnnulateur(?int $annulateur): self
    {
        $this->annulateur = $annulateur;

        return $this;
    }

    public function getModificateur(): ?int
    {
        return $this->modificateur;
    }

    public function setModificateur(?int $modificateur): self
    {
        $this->modificateur = $modificateur;

        return $this;
    }

    public function getMarche(): ?string
    {
        return $this->marche;
    }

    public function setMarche(string $marche): self
    {
        $this->marche = $marche;

        return $this;
    }

    public function getNumOracle(): ?string
    {
        return $this->numOracle;
    }

    public function setNumOracle(string $numOracle): self
    {
        $this->numOracle = $numOracle;

        return $this;
    }

    public function getNumCons(): ?string
    {
        return $this->numCons;
    }

    public function setNumCons(string $numCons): self
    {
        $this->numCons = $numCons;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(?\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $dateValidation): self
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(?\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getDateAnnulation(): ?\DateTimeInterface
    {
        return $this->dateAnnulation;
    }

    public function setDateAnnulation(?\DateTimeInterface $dateAnnulation): self
    {
        $this->dateAnnulation = $dateAnnulation;

        return $this;
    }

    public function getDateModification(): ?int
    {
        return $this->dateModification;
    }

    public function setDateModification(?int $dateModification): self
    {
        $this->dateModification = $dateModification;

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

    public function getIdTypedemande(): ?Typedemande
    {
        return $this->idTypedemande;
    }

    public function setIdTypedemande(?Typedemande $idTypedemande): self
    {
        $this->idTypedemande = $idTypedemande;

        return $this;
    }

    public function getIdCentre(): ?Centre
    {
        return $this->idCentre;
    }

    public function setIdCentre(?Centre $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }

    public function getIdMagasin(): ?Magasin
    {
        return $this->idMagasin;
    }

    public function setIdMagasin(?Magasin $idMagasin): self
    {
        $this->idMagasin = $idMagasin;

        return $this;
    }

    public function getIdSoustraitant(): ?Soustraitant
    {
        return $this->idSoustraitant;
    }

    public function setIdSoustraitant(?Soustraitant $idSoustraitant): self
    {
        $this->idSoustraitant = $idSoustraitant;

        return $this;
    }

    public function getIdActivite(): ?Activite
    {
        return $this->idActivite;
    }

    public function setIdActivite(?Activite $idActivite): self
    {
        $this->idActivite = $idActivite;

        return $this;
    }

    public function getIdEtatdemande(): ?Etatdemande
    {
        return $this->idEtatdemande;
    }

    public function setIdEtatdemande(?Etatdemande $idEtatdemande): self
    {
        $this->idEtatdemande = $idEtatdemande;

        return $this;
    }

    public function getIdSite(): ?Site
    {
        return $this->idSite;
    }

    public function setIdSite(?Site $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }


}
