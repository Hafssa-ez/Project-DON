<?php
namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $images = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 100)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    // Ajout du champ ville
    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    // Ajout du champ dateAjout
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateAjout = null;

    // CAtégorie 
    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $categorie = null;

    // Relation avec Utilisateur
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)] // Chaque article doit avoir un utilisateur
    private ?Utilisateur $utilisateur = null;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Commentaire::class, cascade: ['remove'])]
private Collection $commentaires;

public function __construct()
{
    $this->commentaires = new ArrayCollection();
}

public function getCommentaires(): Collection
{
    return $this->commentaires;
}

public function addCommentaire(Commentaire $commentaire): self
{
    if (!$this->commentaires->contains($commentaire)) {
        $this->commentaires[] = $commentaire;
        $commentaire->setArticle($this);
    }

    return $this;
}

public function removeCommentaire(Commentaire $commentaire): self
{
    if ($this->commentaires->removeElement($commentaire)) {
        if ($commentaire->getArticle() === $this) {
            $commentaire->setArticle(null);
        }
    }

    return $this;
}


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(?string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): static
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

}
