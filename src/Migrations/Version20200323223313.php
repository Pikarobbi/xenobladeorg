<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323223313 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chestitems_r CHANGE chestid chestid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_D719E77046D5465D ON xenoblade_chestitems_r (chestid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E77046A75C12');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E770F5D6654D');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E77046D5465D');
        $this->addSql('DROP INDEX IDX_D719E77046D5465D ON xenoblade_chestitems_r');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r CHANGE chestid chestid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF254B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68ED31B6743');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EDB43A936');
        $this->addSql('ALTER TABLE xenoblade_mappoints DROP FOREIGN KEY FK_3B7CF95C5FFD247A');
        $this->addSql('ALTER TABLE xenoblade_maps DROP FOREIGN KEY FK_91F31F754B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A130811003');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE887750A6156C');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877C9AF44D6');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877BEA87440');
    }
}
