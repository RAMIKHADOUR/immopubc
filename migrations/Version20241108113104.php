<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241108113104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorysbien (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacts (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(180) NOT NULL, tel_mobile VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infosperso (id INT AUTO_INCREMENT NOT NULL, civility VARCHAR(50) NOT NULL, tele_mobile VARCHAR(255) NOT NULL, tele_fixe VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medias (id INT AUTO_INCREMENT NOT NULL, media VARCHAR(255) DEFAULT NULL, type_media VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE propertys (id INT AUTO_INCREMENT NOT NULL, categorybien_id INT DEFAULT NULL, typesbien_id INT DEFAULT NULL, users_id INT DEFAULT NULL, title VARCHAR(100) DEFAULT NULL, description LONGTEXT NOT NULL, surface DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, chambres INT NOT NULL, sallebains INT NOT NULL, etages INT NOT NULL, numero_etage INT NOT NULL, internet TINYINT(1) NOT NULL, garage TINYINT(1) NOT NULL, piscine TINYINT(1) NOT NULL, camera TINYINT(1) NOT NULL, numero_voie INT NOT NULL, type_voie VARCHAR(50) NOT NULL, name_voie VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postale VARCHAR(100) NOT NULL, region VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7AEEC2C44B4E95F7 (categorybien_id), INDEX IDX_7AEEC2C43B6DA0E3 (typesbien_id), INDEX IDX_7AEEC2C467B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typesbien (id INT AUTO_INCREMENT NOT NULL, type_bien VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C44B4E95F7 FOREIGN KEY (categorybien_id) REFERENCES categorysbien (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C43B6DA0E3 FOREIGN KEY (typesbien_id) REFERENCES typesbien (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C467B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C44B4E95F7');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C43B6DA0E3');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C467B3B43D');
        $this->addSql('DROP TABLE categorysbien');
        $this->addSql('DROP TABLE contacts');
        $this->addSql('DROP TABLE infosperso');
        $this->addSql('DROP TABLE medias');
        $this->addSql('DROP TABLE propertys');
        $this->addSql('DROP TABLE typesbien');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
