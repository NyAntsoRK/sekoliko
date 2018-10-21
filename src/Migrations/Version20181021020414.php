<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181021020414 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE TzSekolikoPersonnel CHANGE tzsekolikoprenom TzSekolikoPersoPrenom VARCHAR(100) DEFAULT NULL, CHANGE tzsekolikofonction TzSekolikoPersoFonction VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE TzSekolikoPersonnel CHANGE tzsekolikopersoprenom TzSekolikoPrenom VARCHAR(100) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE tzsekolikopersofonction TzSekolikoFonction VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
    }
}
