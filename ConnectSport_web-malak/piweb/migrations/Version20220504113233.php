<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220504113233 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE actualite CHANGE idres idres INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie CHANGE idpr idpr INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande CHANGE idpers idpers INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat CHANGE idp idp INT DEFAULT NULL, CHANGE idr idr INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE idpp idpp INT DEFAULT NULL');
        $this->addSql('ALTER TABLE magasin CHANGE idps idps INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne CHANGE mdp mdp VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE personnel CHANGE idrespo idrespo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE idm idm INT DEFAULT NULL, CHANGE idperso idperso INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lignecommande DROP quantite');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX fk_pp TO IDX_853B7939E9D3F622');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX fk_cc TO IDX_853B79396D6DB7FC');
        $this->addSql('ALTER TABLE reclamation CHANGE id_cat id_cat INT DEFAULT NULL, CHANGE id_per id_per INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idr idr INT DEFAULT NULL, CHANGE idf idf INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE idp idp INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE actualite CHANGE idres idres INT NOT NULL');
        $this->addSql('ALTER TABLE categorie CHANGE idpr idpr INT NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE idpers idpers INT NOT NULL');
        $this->addSql('ALTER TABLE contrat CHANGE idp idp INT NOT NULL, CHANGE idr idr INT NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE idpp idpp INT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande ADD quantite INT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX idx_853b79396d6db7fc TO fk_cc');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX idx_853b7939e9d3f622 TO fk_pp');
        $this->addSql('ALTER TABLE magasin CHANGE idps idps INT NOT NULL');
        $this->addSql('ALTER TABLE personne CHANGE mdp mdp VARCHAR(700) NOT NULL');
        $this->addSql('ALTER TABLE personnel CHANGE idrespo idrespo INT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE idm idm INT NOT NULL, CHANGE idperso idperso INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_cat id_cat INT NOT NULL, CHANGE id_per id_per INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idf idf INT NOT NULL, CHANGE idr idr INT NOT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE idp idp INT NOT NULL');
    }
}
