<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210302162856 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `group` ADD book_id INT DEFAULT NULL, ADD author_id INT DEFAULT NULL, ADD editor_id INT DEFAULT NULL, ADD gender_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C516A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C56995AC4C FOREIGN KEY (editor_id) REFERENCES editor (id)');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5708A0E0 FOREIGN KEY (gender_id) REFERENCES gendre (id)');
        $this->addSql('CREATE INDEX IDX_6DC044C516A2B381 ON `group` (book_id)');
        $this->addSql('CREATE INDEX IDX_6DC044C5F675F31B ON `group` (author_id)');
        $this->addSql('CREATE INDEX IDX_6DC044C56995AC4C ON `group` (editor_id)');
        $this->addSql('CREATE INDEX IDX_6DC044C5708A0E0 ON `group` (gender_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C516A2B381');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C5F675F31B');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C56995AC4C');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C5708A0E0');
        $this->addSql('DROP INDEX IDX_6DC044C516A2B381 ON `group`');
        $this->addSql('DROP INDEX IDX_6DC044C5F675F31B ON `group`');
        $this->addSql('DROP INDEX IDX_6DC044C56995AC4C ON `group`');
        $this->addSql('DROP INDEX IDX_6DC044C5708A0E0 ON `group`');
        $this->addSql('ALTER TABLE `group` DROP book_id, DROP author_id, DROP editor_id, DROP gender_id');
    }
}
