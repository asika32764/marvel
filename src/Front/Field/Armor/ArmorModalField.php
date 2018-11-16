<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Field\Armor;

use Front\Table\Table;
use Phoenix\Field\ModalField;

/**
 * The ArmorModalField class.
 *
 * @since  1.0
 */
class ArmorModalField extends ModalField
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::ARMORS;

    /**
     * Property view.
     *
     * @var  string
     */
    protected $view = 'armors';

    /**
     * Property package.
     *
     * @var  string
     */
    protected $package = 'front';

    /**
     * Property titleField.
     *
     * @var  string
     */
    protected $titleField = 'title';

    /**
     * Property keyField.
     *
     * @var  string
     */
    protected $keyField = 'id';
}
