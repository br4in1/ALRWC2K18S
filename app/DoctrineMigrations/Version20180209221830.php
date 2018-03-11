<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180209221830 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', birth_date DATE NOT NULL, registration_date DATE NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, loggedin TINYINT(1) NOT NULL, fidelity_points INT NOT NULL, profile_picture VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D64992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_8D93D649A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_8D93D649C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE Card');
        $this->addSql('DROP TABLE Game');
        $this->addSql('DROP TABLE Goal');
        $this->addSql('DROP TABLE Player');
        $this->addSql('DROP TABLE Squad');
        $this->addSql('DROP TABLE Stadium');
        $this->addSql('DROP TABLE Team');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Card (id INT AUTO_INCREMENT NOT NULL, game INT NOT NULL, player INT NOT NULL, yellow INT NOT NULL, red INT NOT NULL, INDEX game (game), INDEX card_ibfk_2 (player), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Game (id INT AUTO_INCREMENT NOT NULL, Date DATETIME DEFAULT NULL, HomeTeam INT DEFAULT NULL, AwayTeam INT DEFAULT NULL, Result VARCHAR(10) DEFAULT NULL COLLATE utf8_general_ci, Stadium INT DEFAULT NULL, Summary LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, SummaryPhoto TEXT NOT NULL COLLATE utf8_general_ci, Highlights TEXT DEFAULT NULL COLLATE utf8_general_ci, Referee VARCHAR(20) NOT NULL COLLATE utf8_general_ci, INDEX Stadium (Stadium), INDEX game_ibfk_3 (AwayTeam), INDEX game_ibfk_4 (HomeTeam), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Goal (id INT AUTO_INCREMENT NOT NULL, player INT NOT NULL, game INT NOT NULL, minute INT NOT NULL, video VARCHAR(300) NOT NULL COLLATE utf8_general_ci, INDEX game (game), INDEX player (player), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Player (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(50) NOT NULL COLLATE utf8_general_ci, LastName VARCHAR(50) NOT NULL COLLATE utf8_general_ci, Age INT NOT NULL, Club VARCHAR(50) NOT NULL COLLATE utf8_general_ci, Nation INT NOT NULL, Height DOUBLE PRECISION NOT NULL, Weight DOUBLE PRECISION NOT NULL, Position VARCHAR(20) NOT NULL COLLATE utf8_general_ci, Goals INT NOT NULL, Description TEXT NOT NULL COLLATE utf8_general_ci, ProfilePhoto TEXT NOT NULL COLLATE utf8_general_ci, BlanketPhoto TEXT NOT NULL COLLATE utf8_general_ci, DescriptionPhoto TEXT NOT NULL COLLATE utf8_general_ci, FbLink TEXT NOT NULL COLLATE utf8_general_ci, TwitterLink TEXT NOT NULL COLLATE utf8_general_ci, ShirtNb INT NOT NULL, Video TEXT NOT NULL COLLATE utf8_general_ci, INDEX Nation (Nation), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Squad (id INT NOT NULL, Formation VARCHAR(20) NOT NULL COLLATE utf8_general_ci, Team INT NOT NULL, Game INT NOT NULL, Player1 INT NOT NULL, Player2 INT NOT NULL, Player3 INT NOT NULL, Player4 INT NOT NULL, Player5 INT NOT NULL, Player6 INT NOT NULL, Player7 INT NOT NULL, Player8 INT NOT NULL, Player9 INT NOT NULL, Player10 INT NOT NULL, Player11 INT NOT NULL, INDEX Game (Game), INDEX Team (Team), INDEX Player1 (Player1), INDEX Player2 (Player2), INDEX Player3 (Player3), INDEX Player4 (Player4), INDEX Player5 (Player5), INDEX Player6 (Player6), INDEX Player7 (Player7), INDEX Player8 (Player8), INDEX Player9 (Player9), INDEX Player10 (Player10), INDEX Player11 (Player11)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Stadium (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL COLLATE utf8_general_ci, city VARCHAR(80) NOT NULL COLLATE utf8_general_ci, capacity BIGINT NOT NULL, geolat DOUBLE PRECISION NOT NULL, geolong DOUBLE PRECISION NOT NULL, photo TEXT NOT NULL COLLATE utf8_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL COLLATE utf8_general_ci, Coach VARCHAR(30) NOT NULL COLLATE utf8_general_ci, President VARCHAR(30) NOT NULL COLLATE utf8_general_ci, Area VARCHAR(30) NOT NULL COLLATE utf8_general_ci, GamesPlayed INT NOT NULL, GoalScored INT NOT NULL, GoalAgainst INT NOT NULL, Participations INT NOT NULL, FifaDate DATE NOT NULL, WcGroup VARCHAR(10) NOT NULL COLLATE utf8_general_ci, Win INT NOT NULL, Loose INT NOT NULL, Draw INT NOT NULL, Points INT NOT NULL, FifaRank INT NOT NULL, FlagPhoto TEXT NOT NULL COLLATE utf8_general_ci, LogoPhoto TEXT NOT NULL COLLATE utf8_general_ci, SquadPhoto TEXT NOT NULL COLLATE utf8_general_ci, DescriptionPhoto TEXT NOT NULL COLLATE utf8_general_ci, Description TEXT NOT NULL COLLATE utf8_general_ci, Website TEXT NOT NULL COLLATE utf8_general_ci, Video TEXT NOT NULL COLLATE utf8_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
    }
}
