<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220504173126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_act INT DEFAULT NULL, id_per INT DEFAULT NULL, comment VARCHAR(100) NOT NULL, dateajout DATE NOT NULL, INDEX fk_id_respo (id_per), INDEX fk_id_act (id_act), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC31481D1E FOREIGN KEY (id_act) REFERENCES actualite (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC9395D6EA FOREIGN KEY (id_per) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne CHANGE mdp mdp VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE personnel CHANGE idrespo idrespo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE idm idm INT DEFAULT NULL, CHANGE idperso idperso INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lignecommande DROP quantite');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX fk_pp TO IDX_853B7939E9D3F622');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX fk_cc TO IDX_853B79396D6DB7FC');
        $this->addSql('ALTER TABLE reclamation CHANGE id_cat id_cat INT DEFAULT NULL, CHANGE id_per id_per INT DEFAULT NULL, CHANGE num_commande num_commande VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idr idr INT DEFAULT NULL, CHANGE idf idf INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE idp idp INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('ALTER TABLE lignecommande ADD quantite INT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX idx_853b79396d6db7fc TO fk_cc');
        $this->addSql('ALTER TABLE lignecommande RENAME INDEX idx_853b7939e9d3f622 TO fk_pp');
        $this->addSql('ALTER TABLE personne CHANGE mdp mdp VARCHAR(700) NOT NULL');
        $this->addSql('ALTER TABLE personnel CHANGE idrespo idrespo INT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE idm idm INT NOT NULL, CHANGE idperso idperso INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_cat id_cat INT NOT NULL, CHANGE id_per id_per INT NOT NULL, CHANGE num_commande num_commande VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idf idf INT NOT NULL, CHANGE idr idr INT NOT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE idp idp INT NOT NULL');
    }
}
