<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200627142443 extends AbstractMigration
{

    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chapters ADD slug VARCHAR(128)');
        $this->addSql('UPDATE xenoblade_chapters SET slug = null');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A33A83AE989D9B63 ON xenoblade_chapters (slug)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chapters DROP slug');
    }
}
