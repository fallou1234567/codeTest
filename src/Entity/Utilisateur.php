<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="id_chantierprojet", columns={"soustraitant_rattachment"}), @ORM\Index(name="id_departement", columns={"centre_rattachment"}), @ORM\Index(name="id_profil", columns={"id_profil"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="centre_rattachment", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $centreRattachment = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ancien_centre", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ancienCentre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="soustraitant_rattachment", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $soustraitantRattachment = NULL;

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
     * @var int
     *
     * @ORM\Column(name="id_profil", type="integer", nullable=false)
     */
    private $idProfil;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_oracle", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $loginOracle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="telephone", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $telephone = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="validite", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $validite = 'NULL';

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getCentreRattachment(): ?int
    {
        return $this->centreRattachment;
    }

    public function setCentreRattachment(?int $centreRattachment): self
    {
        $this->centreRattachment = $centreRattachment;

        return $this;
    }

    public function getAncienCentre(): ?int
    {
        return $this->ancienCentre;
    }

    public function setAncienCentre(?int $ancienCentre): self
    {
        $this->ancienCentre = $ancienCentre;

        return $this;
    }

    public function getSoustraitantRattachment(): ?int
    {
        return $this->soustraitantRattachment;
    }

    public function setSoustraitantRattachment(?int $soustraitantRattachment): self
    {
        $this->soustraitantRattachment = $soustraitantRattachment;

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

    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    public function setIdProfil(int $idProfil): self
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLoginOracle(): ?string
    {
        return $this->loginOracle;
    }

    public function setLoginOracle(?string $loginOracle): self
    {
        $this->loginOracle = $loginOracle;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function isValidite(): ?bool
    {
        return $this->validite;
    }

    public function setValidite(?bool $validite): self
    {
        $this->validite = $validite;

        return $this;
    }


}
