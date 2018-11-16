<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\DataMapper;

use Front\Record\HeroRecord;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;

/**
 * The HeroMapper class.
 *
 * @since  1.0
 */
class HeroMapper extends AbstractDatabaseMapperProxy
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected static $table = 'heros';

    /**
     * Property keys.
     *
     * @var  string
     */
    protected static $keys = 'id';

    /**
     * Property alias.
     *
     * @var  string
     */
    protected static $alias = 'hero';

    /**
     * Property dataClass.
     *
     * @var  string
     */
    protected static $dataClass = HeroRecord::class;
}
