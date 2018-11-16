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
 * Migration class of SkillInit.
 */
class SkillInit extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->createTable(Table::SKILLS, function (Schema $schema) {
            $schema->primary('id')->comment('Primary Key');
            $schema->varchar('title')->comment('Title');
            $schema->text('description')->comment('Intro Text');
            $schema->varchar('image')->comment('Main Image');
            $schema->tinyint('state')->signed(true)->comment('0: unpublished, 1:published');
            $schema->datetime('created')->comment('Created Date');
            $schema->integer('created_by')->comment('Author');
            $schema->datetime('modified')->comment('Modified Date');
            $schema->integer('modified_by')->comment('Modified User');
            $schema->text('params')->comment('Params');

            $schema->addIndex('created_by');
        });

        $this->createTable(Table::HERO_SKILL_MAPS, function (Schema $schema) {
            $schema->integer('hero_id');
            $schema->integer('skill_id');
            $schema->integer('ordering');

            $schema->addPrimaryKey(['hero_id', 'skill_id']);
        });
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->drop(Table::SKILLS);
        $this->drop(Table::HERO_SKILL_MAPS);
    }
}
