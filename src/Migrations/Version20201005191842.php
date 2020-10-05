<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201005191842 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certification ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE certification ADD CONSTRAINT FK_6C3C6D75A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6C3C6D75A76ED395 ON certification (user_id)');
        $this->addSql('ALTER TABLE education CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE experience ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C103A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_590C103A76ED395 ON experience (user_id)');
        $this->addSql('ALTER TABLE language ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D4DB71B5A76ED395 ON language (user_id)');
        $this->addSql('ALTER TABLE organization ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE organization ADD CONSTRAINT FK_C1EE637CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C1EE637CA76ED395 ON organization (user_id)');
        $this->addSql('ALTER TABLE project ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEA76ED395 ON project (user_id)');
        $this->addSql('ALTER TABLE skills ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE skills ADD CONSTRAINT FK_D5311670A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D5311670A76ED395 ON skills (user_id)');
        $this->addSql('ALTER TABLE stage ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C27C9369A76ED395 ON stage (user_id)');
        $this->addSql('ALTER TABLE user CHANGE profile_id profile_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certification DROP FOREIGN KEY FK_6C3C6D75A76ED395');
        $this->addSql('DROP INDEX IDX_6C3C6D75A76ED395 ON certification');
        $this->addSql('ALTER TABLE certification DROP user_id');
        $this->addSql('ALTER TABLE education CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C103A76ED395');
        $this->addSql('DROP INDEX IDX_590C103A76ED395 ON experience');
        $this->addSql('ALTER TABLE experience DROP user_id');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B5A76ED395');
        $this->addSql('DROP INDEX IDX_D4DB71B5A76ED395 ON language');
        $this->addSql('ALTER TABLE language DROP user_id');
        $this->addSql('ALTER TABLE organization DROP FOREIGN KEY FK_C1EE637CA76ED395');
        $this->addSql('DROP INDEX IDX_C1EE637CA76ED395 ON organization');
        $this->addSql('ALTER TABLE organization DROP user_id');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEA76ED395');
        $this->addSql('DROP INDEX IDX_2FB3D0EEA76ED395 ON project');
        $this->addSql('ALTER TABLE project DROP user_id');
        $this->addSql('ALTER TABLE skills DROP FOREIGN KEY FK_D5311670A76ED395');
        $this->addSql('DROP INDEX IDX_D5311670A76ED395 ON skills');
        $this->addSql('ALTER TABLE skills DROP user_id');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369A76ED395');
        $this->addSql('DROP INDEX IDX_C27C9369A76ED395 ON stage');
        $this->addSql('ALTER TABLE stage DROP user_id');
        $this->addSql('ALTER TABLE user CHANGE profile_id profile_id INT DEFAULT NULL');
    }
}
