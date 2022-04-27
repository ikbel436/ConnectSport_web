<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220418171511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD idp INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DE9D3F622 FOREIGN KEY (idp) REFERENCES produit (idp)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DE9D3F622 ON commande (idp)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DE9D3F622');
        $this->addSql('DROP INDEX IDX_6EEAA67DE9D3F622 ON commande');
        $this->addSql('ALTER TABLE commande DROP idp');
    }
}
