<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200309144149 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(50) NOT NULL, usermail VARCHAR(50) NOT NULL, role VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_ticket (user_id INT NOT NULL, ticket_id INT NOT NULL, INDEX IDX_F2F2B69EA76ED395 (user_id), INDEX IDX_F2F2B69E700047D2 (ticket_id), PRIMARY KEY(user_id, ticket_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, ticketid_id INT NOT NULL, user_id_id INT NOT NULL, comment_title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, status INT NOT NULL, INDEX IDX_9474526C10BAFB74 (ticketid_id), INDEX IDX_9474526C9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, ticket_title VARCHAR(255) NOT NULL, status INT NOT NULL, level INT NOT NULL, date DATETIME NOT NULL, content LONGTEXT NOT NULL, counter INT NOT NULL, prioritylevel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_ticket ADD CONSTRAINT FK_F2F2B69EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_ticket ADD CONSTRAINT FK_F2F2B69E700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C10BAFB74 FOREIGN KEY (ticketid_id) REFERENCES ticket (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_ticket DROP FOREIGN KEY FK_F2F2B69EA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C9D86650F');
        $this->addSql('ALTER TABLE user_ticket DROP FOREIGN KEY FK_F2F2B69E700047D2');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C10BAFB74');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_ticket');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE ticket');
    }
}
