<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129111240 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE act (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_AFECF54412469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE act_artist (act_id INT NOT NULL, artist_id INT NOT NULL, INDEX IDX_F55D8B49D1A55B28 (act_id), INDEX IDX_F55D8B49B7970CF8 (artist_id), PRIMARY KEY(act_id, artist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, photo LONGTEXT NOT NULL, biography LONGTEXT NOT NULL, INDEX IDX_159968712469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, date_event DATETIME NOT NULL, address1 VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, zip_code VARCHAR(10) NOT NULL, city VARCHAR(255) NOT NULL, lattitude VARCHAR(25) NOT NULL, longitude VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shows (id INT AUTO_INCREMENT NOT NULL, date_show DATETIME NOT NULL, tarification_week_end_rise NUMERIC(5, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shows_act (shows_id INT NOT NULL, act_id INT NOT NULL, INDEX IDX_3A41F878AD7ED998 (shows_id), INDEX IDX_3A41F878D1A55B28 (act_id), PRIMARY KEY(shows_id, act_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarification (id INT AUTO_INCREMENT NOT NULL, shows_id INT DEFAULT NULL, adult NUMERIC(5, 2) NOT NULL, kid NUMERIC(5, 2) NOT NULL, group_price NUMERIC(5, 2) NOT NULL, school NUMERIC(5, 2) NOT NULL, INDEX IDX_6132816AD7ED998 (shows_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, address1 VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, zip_code VARCHAR(10) NOT NULL, city VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE act ADD CONSTRAINT FK_AFECF54412469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE act_artist ADD CONSTRAINT FK_F55D8B49D1A55B28 FOREIGN KEY (act_id) REFERENCES act (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE act_artist ADD CONSTRAINT FK_F55D8B49B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_159968712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE shows_act ADD CONSTRAINT FK_3A41F878AD7ED998 FOREIGN KEY (shows_id) REFERENCES shows (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shows_act ADD CONSTRAINT FK_3A41F878D1A55B28 FOREIGN KEY (act_id) REFERENCES act (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tarification ADD CONSTRAINT FK_6132816AD7ED998 FOREIGN KEY (shows_id) REFERENCES shows (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE act_artist DROP FOREIGN KEY FK_F55D8B49D1A55B28');
        $this->addSql('ALTER TABLE shows_act DROP FOREIGN KEY FK_3A41F878D1A55B28');
        $this->addSql('ALTER TABLE act_artist DROP FOREIGN KEY FK_F55D8B49B7970CF8');
        $this->addSql('ALTER TABLE act DROP FOREIGN KEY FK_AFECF54412469DE2');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_159968712469DE2');
        $this->addSql('ALTER TABLE shows_act DROP FOREIGN KEY FK_3A41F878AD7ED998');
        $this->addSql('ALTER TABLE tarification DROP FOREIGN KEY FK_6132816AD7ED998');
        $this->addSql('DROP TABLE act');
        $this->addSql('DROP TABLE act_artist');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE shows');
        $this->addSql('DROP TABLE shows_act');
        $this->addSql('DROP TABLE tarification');
        $this->addSql('DROP TABLE user');
    }
}
