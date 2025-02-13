<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use App\Enum\StatutDemande;

#[ORM\Entity]
#[ORM\Table(name: 'utilisateur_article')]
class UtilisateurArticle
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'uuid', unique: true)]
    public readonly UuidInterface $id;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(nullable: false)]
    public readonly Utilisateur $utilisateur;

    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'demandes')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private Article $article;

    #[ORM\Column(type: 'string', enumType: StatutDemande::class)]
    public StatutDemande $statut;

    #[ORM\Column(type: 'datetime_immutable')]
    public readonly \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    public ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $dateReservation = null;

    public function __construct(Utilisateur $utilisateur, Article $article)
    {
        $this->id = Uuid::uuid4();
        $this->utilisateur = $utilisateur;
        $this->article = $article;
        $this->statut = StatutDemande::EN_COURS;
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getArticle(): Article
    {
        return $this->article;
    }

    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getDateReservation(): ?\DateTimeImmutable
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeImmutable $dateReservation): void
    {
        $this->dateReservation = $dateReservation;
    }
    public function setStatut(StatutDemande $statut): self
    {
        $this->statut = $statut;
        return $this;
    }
    

}
