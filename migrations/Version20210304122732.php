<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304122732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author ADD image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE book ADD image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE editor ADD image VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE gendre ADD image VARCHAR(500) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE author DROP image');
        $this->addSql('ALTER TABLE book DROP image');
        $this->addSql('ALTER TABLE editor DROP image');
        $this->addSql('ALTER TABLE gendre DROP image');
    }
}
