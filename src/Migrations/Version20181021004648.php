<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181021004648 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tz_sekoliko_prof (id INT AUTO_INCREMENT NOT NULL, tz_sekoliko_prof_nom VARCHAR(45) DEFAULT NULL, tz_sekoliko_prof_prenom VARCHAR(100) DEFAULT NULL, tz_sekoliko_prof_fonction VARCHAR(100) DEFAULT NULL, tz_sekoliko_prof_date_debut DATE DEFAULT NULL, tz_sekoliko_prof_contact VARCHAR(100) DEFAULT NULL, tz_sekoliko_prof_date_fin DATE DEFAULT NULL, tz_sekoliko_prof_date_is_fin DATE DEFAULT NULL, tz_sekoliko_prof_date_naissance DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tz_sekoliko_prof');
    }
}
