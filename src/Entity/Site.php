<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site", indexes={@ORM\Index(name="id_domaine", columns={"id_domaine"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SiteRepository")
 */
class Site
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_site", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_site", type="string", length=100, nullable=false)
     */
    private $nomSite;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     */
    private $idDomaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefixe_site", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $prefixeSite = 'NULL';

    public function getIdSite(): ?int
    {
        return $this->idSite;
    }

    public function getNomSite(): ?string
    {
        return $this->nomSite;
    }

    public function setNomSite(string $nomSite): self
    {
        $this->nomSite = $nomSite;

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

    public function getPrefixeSite(): ?string
    {
        return $this->prefixeSite;
    }

    public function setPrefixeSite(?string $prefixeSite): self
    {
        $this->prefixeSite = $prefixeSite;

        return $this;
    }


}
