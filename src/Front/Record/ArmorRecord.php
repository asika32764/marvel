<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Record;

use Front\Record\Columns\ArmorDataInterface;
use Front\Table\Table;
use Windwalker\Event\Event;
use Windwalker\Record\Record;

/**
 * The ArmorRecord class.
 *
 * @since  1.0
 */
class ArmorRecord extends Record implements ArmorDataInterface
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = Table::ARMORS;

    /**
     * Property keys.
     *
     * @var  string
     */
    protected $keys = 'id';

    /**
     * onAfterLoad
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterLoad(Event $event)
    {
        // Add your logic
    }

    /**
     * onAfterStore
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterStore(Event $event)
    {
        // Add your logic
    }

    /**
     * onAfterDelete
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterDelete(Event $event)
    {
        // Add your logic
    }
}
