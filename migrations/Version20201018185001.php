<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20201018185001 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE symfony_demo_post ADD viewcounter int DEFAULT 0');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE symfony_demo_post DROP COLUMN viewcounter');
    }
}
