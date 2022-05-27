<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitecentre
 *
 * @ORM\Table(name="sitecentre", indexes={@ORM\Index(name="id_centre", columns={"id_centre"}), @ORM\Index(name="id_site", columns={"id_site"})})
 * @ORM\Entity
 *  @ORM\Entity(repositoryClass="App\Repository\SitecentreRepository")
 */
class Sitecentre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_site", type="integer", nullable=false)
     */
    private $idSite;

    /**
     * @var int
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=false)
     */
    private $idCentre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSite(): ?int
    {
        return $this->idSite;
    }

    public function setIdSite(int $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function setIdCentre(int $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }


}
