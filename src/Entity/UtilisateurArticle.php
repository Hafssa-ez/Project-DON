<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\UtilisateurArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV7;
use App\Enum\StatutDemande;

#[ORM\Entity(repositoryClass: UtilisateurArticleRepository::class)]
#[ORM\Table(name: 'utilisateur_article')]
class UtilisateurArticle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'uuid', unique: true)]
    public readonly Uuid $id;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'demandesDonneur')]
    #[ORM\JoinColumn(nullable: false)]
    public readonly Utilisateur $donneur;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'demandesReceveur')]
    #[ORM\JoinColumn(nullable: false)]
    public readonly Utilisateur $receveur;

    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'demandes')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    public readonly Article $article;

    #[ORM\Column(type: 'string', enumType: StatutDemande::class)]
    public StatutDemande $statut;

    #[ORM\Column(type: 'datetime_immutable')]
    public readonly \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    public ?\DateTimeImmutable $updatedAt = null;

    public function __construct(Utilisateur $donneur, Utilisateur $receveur, Article $article)
    {
        if (!in_array('ROLE_DONNEUR', $donneur->getRoles(), true)) {
            throw new \InvalidArgumentException('L’utilisateur doit être un donneur.');
        }
        if (!in_array('ROLE_RECEVEUR', $receveur->getRoles(), true)) {
            throw new \InvalidArgumentException('L’utilisateur doit être un receveur.');
        }

        $this->id = UuidV7::generate();
        $this->donneur = $donneur;
        $this->receveur = $receveur;
        $this->article = $article;
        $this->statut = StatutDemande::DISPONIBLE;
        $this->createdAt = new \DateTimeImmutable();
    }

    public function changerStatut(StatutDemande $nouveauStatut): void
    {
        $this->statut = $nouveauStatut;
        $this->updatedAt = new \DateTimeImmutable();
    }
}
