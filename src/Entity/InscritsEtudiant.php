<?php

namespace App\Entity;

use App\Repository\InscritsEtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscritsEtudiantRepository::class)
 */
class InscritsEtudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
    * Assert\NotBlank(message= "Le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank(message= "Le prenom est obligatoire")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * Assert\NotBlank(message= "La date est obligatoire")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank(message= "Le sex est obligatoire")
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank(message= "L email est obligatoire")
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * Assert\NotBlank(message= "Le numero_tel est obligatoire")
     * Assert\length(min=8)
     */
    private $num_tel;

    /**
     * @ORM\Column(type="string", length=255)
     * Assert\NotBlank(message= "Le sujet est obligatoire")
     */
    private $sujet;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }
}
