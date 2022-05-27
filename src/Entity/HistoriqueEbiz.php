<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueEbiz
 *
 * @ORM\Table(name="historique_ebiz", indexes={@ORM\Index(name="utilisateur_id", columns={"utilisateur_id"}), @ORM\Index(name="ot_id", columns={"ot_id"}), @ORM\Index(name="demande_id", columns={"demande_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\HistoriqueEbizRepository")
 */
class HistoriqueEbiz
{
    //const ETAT1=1;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="demande_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $demandeId = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ot_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $otId = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_filter", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateFilter = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $utilisateurId = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_ip", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $adresseIp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $transaction = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature_oracle", type="string", length=1000, nullable=true, options={"default"="NULL"})
     */
    private $signatureOracle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature_attach", type="string", length=1000, nullable=true, options={"default"="NULL"})
     */
    private $signatureAttach = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDemandeId(): ?int
    {
        return $this->demandeId;
    }

    public function setDemandeId(?int $demandeId): self
    {
        $this->demandeId = $demandeId;

        return $this;
    }

    public function getOtId(): ?int
    {
        return $this->otId;
    }

    public function setOtId(?int $otId): self
    {
        $this->otId = $otId;

        return $this;
    }

    public function getDateFilter(): ?\DateTimeInterface
    {
        return $this->dateFilter;
    }

    public function setDateFilter(?\DateTimeInterface $dateFilter): self
    {
        $this->dateFilter = $dateFilter;

        return $this;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(?int $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAdresseIp(): ?string
    {
        return $this->adresseIp;
    }

    public function setAdresseIp(?string $adresseIp): self
    {
        $this->adresseIp = $adresseIp;

        return $this;
    }

    public function getTransaction(): ?string
    {
        return $this->transaction;
    }

    public function setTransaction(?string $transaction): self
    {
        $this->transaction = $transaction;

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

    public function getSignatureOracle(): ?string
    {
        return $this->signatureOracle;
    }

    public function setSignatureOracle(?string $signatureOracle): self
    {
        $this->signatureOracle = $signatureOracle;

        return $this;
    }

    public function getSignatureAttach(): ?string
    {
        return $this->signatureAttach;
    }

    public function setSignatureAttach(?string $signatureAttach): self
    {
        $this->signatureAttach = $signatureAttach;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
