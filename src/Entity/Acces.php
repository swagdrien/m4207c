<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Util;

    /**
     * @ORM\ManyToOne(targetEntity=Documents::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Docs;

    /**
     * @ORM\ManyToOne(targetEntity=Authorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Autoris;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtil(): ?Utilisateurs
    {
        return $this->Util;
    }

    public function setUtil(?Utilisateurs $Util): self
    {
        $this->Util = $Util;

        return $this;
    }

    public function getDocs(): ?Documents
    {
        return $this->Docs;
    }

    public function setDocs(?Documents $Docs): self
    {
        $this->Docs = $Docs;

        return $this;
    }

    public function getAutoris(): ?Authorisation
    {
        return $this->Autoris;
    }

    public function setAutoris(?Authorisation $Autoris): self
    {
        $this->Autoris = $Autoris;

        return $this;
    }
}
