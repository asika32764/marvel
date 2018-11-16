<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2014 - 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace -- Ignore migration file

use Admin\Table\Table;
use Windwalker\Core\Migration\AbstractMigration;
use Windwalker\Database\Schema\Schema;

/**
 * Migration class of HeroInit.
 */
class HeroInit extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->createTable(Table::HEROS, function (Schema $schema) {
            $schema->primary('id')->comment('Primary Key');
            $schema->varchar('title')->comment('Title');
            $schema->varchar('alias')->comment('Alias');
            $schema->varchar('url')->comment('URL');
            $schema->text('introtext')->comment('Intro Text');
            $schema->text('fulltext')->comment('Full Text');
            $schema->varchar('image')->comment('Main Image');
            $schema->tinyint('state')->signed(true)->comment('0: unpublished, 1:published');
            $schema->integer('ordering')->comment('Ordering');
            $schema->datetime('created')->comment('Created Date');
            $schema->integer('created_by')->comment('Author');
            $schema->datetime('modified')->comment('Modified Date');
            $schema->integer('modified_by')->comment('Modified User');
            $schema->char('language')->length(7)->comment('Language');
            $schema->text('params')->comment('Params');

            $schema->addIndex('alias(150)');
            $schema->addIndex('language');
            $schema->addIndex('created_by');
        });
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->drop(Table::HEROS);
    }
}
