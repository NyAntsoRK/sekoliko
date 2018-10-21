<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181021010216 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Tz_Sekoliko_Etudiant (id INT AUTO_INCREMENT NOT NULL, tz_sekoliko_etudiant_nom VARCHAR(100) NOT NULL, tz_sekoliko_etudiant_prenom VARCHAR(100) DEFAULT NULL, tz_sekoliko_etudiant_contact VARCHAR(100) DEFAULT NULL, tz_sekoliko_etudiant_sexe VARCHAR(100) NOT NULL, tz_sekoliko_etudiant_date_naissance DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Tz_Sekoliko_Etudiant');
    }
}
