<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Field\Hero;

use Admin\Table\Table;
use Phoenix\Field\ModalField;

/**
 * The HeroModalField class.
 *
 * @since  1.0
 */
class HeroModalField extends ModalField
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::HEROS;

    /**
     * Property view.
     *
     * @var  string
     */
    protected $view = 'heros';

    /**
     * Property package.
     *
     * @var  string
     */
    protected $package = 'admin';

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
