<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Field\Armor;

use Front\Table\Table;
use Phoenix\Field\ItemListField;

/**
 * The ArmorField class.
 *
 * @since  1.0
 */
class ArmorListField extends ItemListField
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::ARMORS;

    /**
     * Property ordering.
     *
     * @var  string
     */
    protected $ordering = null;
}
