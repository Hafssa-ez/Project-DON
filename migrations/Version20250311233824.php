<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250311233824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
       
        $this->addSql('ALTER TABLE article CHANGE etat etat VARCHAR(200) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP nom, DROP prenom');
        $this->addSql('ALTER TABLE utilisateur_article ADD date_reservation DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE role');
        $this->addSql('ALTER TABLE article CHANGE etat etat VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur_article DROP date_reservation');
    }
}
