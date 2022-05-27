<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquedemande
 *
 * @ORM\Table(name="historiquedemande", indexes={@ORM\Index(name="id_ot", columns={"id_demande"}), @ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_etatlot", columns={"id_etatdemande"})})
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\historiquedemandeRepository")
 */
class Historiquedemande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_historiquedemande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistoriquedemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_historiquedemande", type="datetime", nullable=false)
     */
    private $dateHistoriquedemande;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_historiquedemande", type="text", length=65535, nullable=false)
     */
    private $commentaireHistoriquedemande;

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
     * @var \Demande
     *
     * @ORM\ManyToOne(targetEntity="Demande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_demande", referencedColumnName="id_demande")
     * })
     */
    private $idDemande;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $idUtilisateur;

    public function getIdHistoriquedemande(): ?int
    {
        return $this->idHistoriquedemande;
    }

    public function getDateHistoriquedemande(): ?\DateTimeInterface
    {
        return $this->dateHistoriquedemande;
    }

    public function setDateHistoriquedemande(\DateTimeInterface $dateHistoriquedemande): self
    {
        $this->dateHistoriquedemande = $dateHistoriquedemande;

        return $this;
    }

    public function getCommentaireHistoriquedemande(): ?string
    {
        return $this->commentaireHistoriquedemande;
    }

    public function setCommentaireHistoriquedemande(string $commentaireHistoriquedemande): self
    {
        $this->commentaireHistoriquedemande = $commentaireHistoriquedemande;

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

    public function getIdDemande(): ?Demande
    {
        return $this->idDemande;
    }

    public function setIdDemande(?Demande $idDemande): self
    {
        $this->idDemande = $idDemande;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }


}
