<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre")
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\CentreRepository")
 */
class Centre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentre;

    /**
     * @var int
     *
     * @ORM\Column(name="id_agence", type="integer", nullable=false)
     */
    private $idAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_centre", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $nomCentre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="description_centre", type="text", length=65535, nullable=false)
     */
    private $descriptionCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cr_centre", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $crCentre = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="magasin_edc_oracle", type="string", length=100, nullable=false)
     */
    private $magasinEdcOracle;

    /**
     * @var string
     *
     * @ORM\Column(name="magasin_omt_oracle", type="string", length=100, nullable=false)
     */
    private $magasinOmtOracle;

    /**
     * @var string
     *
     * @ORM\Column(name="id_oracle", type="string", length=10, nullable=false)
     */
    private $idOracle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="responsable_centre", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $responsableCentre = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe_centre", type="string", length=5, nullable=false)
     */
    private $prefixeCentre;

    /**
     * @var bool
     *
     * @ORM\Column(name="validite", type="boolean", nullable=false, options={"default"="1"})
     */
    private $validite = true;

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function getIdAgence(): ?int
    {
        return $this->idAgence;
    }

    public function setIdAgence(int $idAgence): self
    {
        $this->idAgence = $idAgence;

        return $this;
    }

    public function getNomCentre(): ?string
    {
        return $this->nomCentre;
    }

    public function setNomCentre(string $nomCentre): self
    {
        $this->nomCentre = $nomCentre;

        return $this;
    }

    public function getDescriptionCentre(): ?string
    {
        return $this->descriptionCentre;
    }

    public function setDescriptionCentre(string $descriptionCentre): self
    {
        $this->descriptionCentre = $descriptionCentre;

        return $this;
    }

    public function getCrCentre(): ?string
    {
        return $this->crCentre;
    }

    public function setCrCentre(?string $crCentre): self
    {
        $this->crCentre = $crCentre;

        return $this;
    }

    public function getMagasinEdcOracle(): ?string
    {
        return $this->magasinEdcOracle;
    }

    public function setMagasinEdcOracle(string $magasinEdcOracle): self
    {
        $this->magasinEdcOracle = $magasinEdcOracle;

        return $this;
    }

    public function getMagasinOmtOracle(): ?string
    {
        return $this->magasinOmtOracle;
    }

    public function setMagasinOmtOracle(string $magasinOmtOracle): self
    {
        $this->magasinOmtOracle = $magasinOmtOracle;

        return $this;
    }

    public function getIdOracle(): ?string
    {
        return $this->idOracle;
    }

    public function setIdOracle(string $idOracle): self
    {
        $this->idOracle = $idOracle;

        return $this;
    }

    public function getResponsableCentre(): ?int
    {
        return $this->responsableCentre;
    }

    public function setResponsableCentre(?int $responsableCentre): self
    {
        $this->responsableCentre = $responsableCentre;

        return $this;
    }

    public function getPrefixeCentre(): ?string
    {
        return $this->prefixeCentre;
    }

    public function setPrefixeCentre(string $prefixeCentre): self
    {
        $this->prefixeCentre = $prefixeCentre;

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
