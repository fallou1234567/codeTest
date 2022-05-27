<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soustraitant
 *
 * @ORM\Table(name="soustraitant", indexes={@ORM\Index(name="responsable_soustraitant", columns={"responsable_soustraitant"}), @ORM\Index(name="id_domaine", columns={"id_domaine"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SoustraitantRepository")
 */
class Soustraitant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_soustraitant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSoustraitant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_soustraitant", type="string", length=100, nullable=false)
     */
    private $nomSoustraitant;

    /**
     * @var string
     *
     * @ORM\Column(name="description_soustraitant", type="text", length=65535, nullable=false)
     */
    private $descriptionSoustraitant;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_oracle", type="string", length=10, nullable=false)
     */
    private $referenceOracle;

    /**
     * @var string
     *
     * @ORM\Column(name="sa_omt_oracle", type="string", length=100, nullable=false)
     */
    private $saOmtOracle;

    /**
     * @var string
     *
     * @ORM\Column(name="sm_edc_oracle", type="string", length=100, nullable=false)
     */
    private $smEdcOracle;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement_oracle", type="string", length=100, nullable=false)
     */
    private $emplacementOracle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="responsable_soustraitant", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $responsableSoustraitant = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe_soustraitant", type="string", length=10, nullable=false)
     */
    private $prefixeSoustraitant;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     */
    private $idDomaine;

    public function getIdSoustraitant(): ?int
    {
        return $this->idSoustraitant;
    }

    public function getNomSoustraitant(): ?string
    {
        return $this->nomSoustraitant;
    }

    public function setNomSoustraitant(string $nomSoustraitant): self
    {
        $this->nomSoustraitant = $nomSoustraitant;

        return $this;
    }

    public function getDescriptionSoustraitant(): ?string
    {
        return $this->descriptionSoustraitant;
    }

    public function setDescriptionSoustraitant(string $descriptionSoustraitant): self
    {
        $this->descriptionSoustraitant = $descriptionSoustraitant;

        return $this;
    }

    public function getReferenceOracle(): ?string
    {
        return $this->referenceOracle;
    }

    public function setReferenceOracle(string $referenceOracle): self
    {
        $this->referenceOracle = $referenceOracle;

        return $this;
    }

    public function getSaOmtOracle(): ?string
    {
        return $this->saOmtOracle;
    }

    public function setSaOmtOracle(string $saOmtOracle): self
    {
        $this->saOmtOracle = $saOmtOracle;

        return $this;
    }

    public function getSmEdcOracle(): ?string
    {
        return $this->smEdcOracle;
    }

    public function setSmEdcOracle(string $smEdcOracle): self
    {
        $this->smEdcOracle = $smEdcOracle;

        return $this;
    }

    public function getEmplacementOracle(): ?string
    {
        return $this->emplacementOracle;
    }

    public function setEmplacementOracle(string $emplacementOracle): self
    {
        $this->emplacementOracle = $emplacementOracle;

        return $this;
    }

    public function getResponsableSoustraitant(): ?int
    {
        return $this->responsableSoustraitant;
    }

    public function setResponsableSoustraitant(?int $responsableSoustraitant): self
    {
        $this->responsableSoustraitant = $responsableSoustraitant;

        return $this;
    }

    public function getPrefixeSoustraitant(): ?string
    {
        return $this->prefixeSoustraitant;
    }

    public function setPrefixeSoustraitant(string $prefixeSoustraitant): self
    {
        $this->prefixeSoustraitant = $prefixeSoustraitant;

        return $this;
    }

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function setIdDomaine(int $idDomaine): self
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }


}
