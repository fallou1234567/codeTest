<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220523122716 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activite CHANGE id_typeactivite id_typeactivite INT DEFAULT NULL, CHANGE id_domaine id_domaine INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_1');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_2');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_3');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_4');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_5');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_6');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY demande_ibfk_7');
        $this->addSql('ALTER TABLE demande CHANGE id_typedemande id_typedemande INT DEFAULT NULL, CHANGE id_magasin id_magasin INT DEFAULT NULL, CHANGE id_centre id_centre INT DEFAULT NULL, CHANGE id_site id_site INT DEFAULT NULL, CHANGE id_soustraitant id_soustraitant INT DEFAULT NULL, CHANGE id_activite id_activite INT DEFAULT NULL, CHANGE id_etatdemande id_etatdemande INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5E8AEB980 FOREIGN KEY (id_activite) REFERENCES activite (id_activite)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5E0975F98 FOREIGN KEY (id_centre) REFERENCES centre (id_centre)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5754E61D5 FOREIGN KEY (id_etatdemande) REFERENCES etatdemande (id_etatdemande)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A58A32F657 FOREIGN KEY (id_magasin) REFERENCES magasin (id_magasin)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5E26315E6 FOREIGN KEY (id_site) REFERENCES site (id_site)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5149BC150 FOREIGN KEY (id_soustraitant) REFERENCES soustraitant (id_soustraitant)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5E46296E9 FOREIGN KEY (id_typedemande) REFERENCES typedemande (id_typedemande)');
        $this->addSql('ALTER TABLE detaildemande CHANGE id_materiel id_materiel INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historiquedemande CHANGE id_demande id_demande INT DEFAULT NULL, CHANGE id_utilisateur id_utilisateur INT DEFAULT NULL, CHANGE id_etatdemande id_etatdemande INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materielutilise CHANGE id_materiel id_materiel INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ot CHANGE id_ot id_ot INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activite CHANGE id_domaine id_domaine INT NOT NULL, CHANGE id_typeactivite id_typeactivite INT NOT NULL');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5E8AEB980');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5E0975F98');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5754E61D5');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A58A32F657');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5E26315E6');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5149BC150');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5E46296E9');
        $this->addSql('ALTER TABLE demande CHANGE id_activite id_activite INT DEFAULT NULL, CHANGE id_centre id_centre INT DEFAULT NULL, CHANGE id_etatdemande id_etatdemande INT DEFAULT 1 NOT NULL, CHANGE id_magasin id_magasin INT DEFAULT NULL, CHANGE id_site id_site INT DEFAULT NULL, CHANGE id_soustraitant id_soustraitant INT DEFAULT NULL, CHANGE id_typedemande id_typedemande INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_1 FOREIGN KEY (id_activite) REFERENCES activite (id_activite) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_2 FOREIGN KEY (id_centre) REFERENCES centre (id_centre) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_3 FOREIGN KEY (id_etatdemande) REFERENCES etatdemande (id_etatdemande) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_4 FOREIGN KEY (id_magasin) REFERENCES magasin (id_magasin) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_5 FOREIGN KEY (id_site) REFERENCES site (id_site) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_6 FOREIGN KEY (id_soustraitant) REFERENCES soustraitant (id_soustraitant) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT demande_ibfk_7 FOREIGN KEY (id_typedemande) REFERENCES typedemande (id_typedemande) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detaildemande CHANGE id_materiel id_materiel INT NOT NULL');
        $this->addSql('ALTER TABLE historiquedemande CHANGE id_demande id_demande INT NOT NULL, CHANGE id_etatdemande id_etatdemande INT NOT NULL, CHANGE id_utilisateur id_utilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE materielutilise CHANGE id_materiel id_materiel INT NOT NULL');
        $this->addSql('ALTER TABLE ot CHANGE id_ot id_ot INT NOT NULL');
    }
}
