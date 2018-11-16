<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Field\Skill;

use Admin\Table\Table;
use Phoenix\Field\ItemListField;

/**
 * The SkillField class.
 *
 * @since  1.0
 */
class SkillListField extends ItemListField
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::SKILLS;

    /**
     * Property ordering.
     *
     * @var  string
     */
    protected $ordering = null;
}
