<?php
namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements PasswordAuthenticatedUserInterface
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
    private ?string $mot_passe = null;

    /**
     * **Champ non stocké en base de données**
     * Utilisé uniquement pour valider que les deux mots de passe sont identiques
     */
    #[Assert\NotBlank(message: "La confirmation du mot de passe est obligatoire.")]
    #[Assert\EqualTo(propertyPath: "mot_passe", message: "Les mots de passe ne correspondent pas.")]
    #[Groups('utilisateur:list')]
    private ?string $confirmationMotPasse = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Article::class, orphanRemoval: true)]
    #[Groups('utilisateur:list')]
    private Collection $articles;

    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy: 'utilisateurs')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('utilisateur:list')]
    private ?Role $role = null;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    // Getters et Setters

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

    public function getMotPasse(): ?string
    {
        return $this->mot_passe;
    }

    public function setMotPasse(string $mot_passe): self
    {
        $this->mot_passe = $mot_passe;
        return $this;
    }

    public function getConfirmationMotPasse(): ?string
    {
        return $this->confirmationMotPasse;
    }

    public function setConfirmationMotPasse(?string $confirmationMotPasse): self
    {
        $this->confirmationMotPasse = $confirmationMotPasse;
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

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;
        return $this;
    }

    // Implémentation de PasswordAuthenticatedUserInterface
    public function getPassword(): ?string
    {
        return $this->mot_passe;
    }
}
