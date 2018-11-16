<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\DataMapper;

use Admin\Record\SkillRecord;
use Admin\Table\Table;
use Windwalker\DataMapper\AbstractDatabaseMapperProxy;
use Windwalker\Event\Event;

/**
 * The SkillMapper class.
 *
 * @since  1.0
 */
class HeroSkillMapMapper extends AbstractDatabaseMapperProxy
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected static $table = Table::HERO_SKILL_MAPS;

    /**
     * Property keys.
     *
     * @var  string
     */
    protected static $keys = null;

    /**
     * onAfterFind
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterFind(Event $event)
    {
        // Add your logic
    }

    /**
     * onAfterCreate
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterCreate(Event $event)
    {
        // Add your logic
    }

    /**
     * onAfterUpdate
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterUpdate(Event $event)
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

    /**
     * onAfterFlush
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterFlush(Event $event)
    {
        // Add your logic
    }

    /**
     * onAfterUpdateAll
     *
     * @param Event $event
     *
     * @return  void
     */
    public function onAfterUpdateAll(Event $event)
    {
        // Add your logic
    }
}
