<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200619073330 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE compo_recette CHANGE recette_id recette_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique_achat CHANGE user_id user_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL, CHANGE date_limite date_limite DATE DEFAULT NULL, CHANGE etat_h etat_h VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prix prix VARCHAR(255) DEFAULT NULL, CHANGE taux_sucre taux_sucre VARCHAR(255) DEFAULT NULL, CHANGE taux_sel taux_sel VARCHAR(255) DEFAULT NULL, CHANGE taux_proteine taux_proteine VARCHAR(255) DEFAULT NULL, CHANGE taux_fibre taux_fibre VARCHAR(255) DEFAULT NULL, CHANGE taux_energie taux_energie VARCHAR(255) DEFAULT NULL, CHANGE taux_gras taux_gras VARCHAR(255) DEFAULT NULL, CHANGE taux_additif taux_additif VARCHAR(255) DEFAULT NULL, CHANGE marque marque VARCHAR(255) DEFAULT NULL, CHANGE taux_calcium taux_calcium VARCHAR(255) DEFAULT NULL, CHANGE taux_sodium taux_sodium VARCHAR(255) DEFAULT NULL, CHANGE nutriscore_grade nutriscore_grade VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE type_utilisateur_id type_utilisateur_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE compo_recette CHANGE recette_id recette_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique_achat CHANGE user_id user_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL, CHANGE date_limite date_limite DATE DEFAULT \'NULL\', CHANGE etat_h etat_h VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE prix prix VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_sucre taux_sucre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_sel taux_sel VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_proteine taux_proteine VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_fibre taux_fibre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_energie taux_energie VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_gras taux_gras VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_additif taux_additif VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE marque marque VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_calcium taux_calcium VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE taux_sodium taux_sodium VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE nutriscore_grade nutriscore_grade VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE type_utilisateur_id type_utilisateur_id INT DEFAULT NULL');
    }
}
