<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Field\Hero;

use Admin\Table\Table;
use Phoenix\Field\ItemListField;

/**
 * The HeroField class.
 *
 * @since  1.0
 */
class HeroListField extends ItemListField
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::HEROS;

    /**
     * Property ordering.
     *
     * @var  string
     */
    protected $ordering = null;
}
