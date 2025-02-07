<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('utilisateur:list')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Groups('utilisateur:list')]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Groups('utilisateur:list')]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: "Le pseudo est obligatoire.")]
    #[Groups('utilisateur:list')]
    private ?string $pseudo = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: "Le téléphone est obligatoire.")]
    #[Assert\Length(min: 10, max: 15, minMessage: "Le numéro de téléphone est trop court.")]
    #[Groups('utilisateur:list')]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Groups('utilisateur:list')]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.")]
    #[Assert\Length(min: 6, minMessage: "Le mot de passe doit contenir au moins 6 caractères.")]
    #[Groups('utilisateur:list')]
    private string $password;
    
    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Article::class, orphanRemoval: true)]
    #[Groups('utilisateur:list')]
    private Collection $articles;

    #[ORM\Column(type: "json")]
    private array $roles = []; 

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->roles = ['ROLE_DONNEUR']; 
    }

   

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

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
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

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setUtilisateur($this);
        }
        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            if ($article->getUtilisateur() === $this) {
                $article->setUtilisateur(null);
            }
        }
        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles ?? ['ROLE_DONNEUR']; 
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles ?? ['ROLE_DONNEUR']; 
        return $this;
    }

    public function eraseCredentials(): void 
    {
    }

    public function getUserIdentifier(): string 
    {
        return $this->pseudo; 
    }
}
