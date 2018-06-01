<?php declare(strict_types=1);

namespace KiwiMigration;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;
use KiwiSuite\CommonTypes\Entity\DateTimeType;
use KiwiSuite\CommonTypes\Entity\UuidType;

final class Version20180601131159 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $table = $schema->createTable('link_link');
        $table->addColumn('id', UuidType::class);
        $table->addColumn('hash', Type::STRING);
        $table->addColumn('type',Type::STRING);
        $table->addColumn('value', Type::TEXT);
        $table->addColumn('createdAt', DateTimeType::TYPE_STRING);

        $table->setPrimaryKey(["id"]);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('link_link');
    }
}
