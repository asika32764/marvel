<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Hero;

use Front\Repository\HeroRepository;
use Phoenix\Controller\AbstractSaveController;
use Windwalker\Data\DataInterface;

/**
 * The SaveController class.
 *
 * @since  1.0
 */
class SaveController extends AbstractSaveController
{
    /**
     * Property name.
     *
     * @var  string
     */
    protected $name = 'Hero';

    /**
     * Property itemName.
     *
     * @var  string
     */
    protected $itemName = 'Hero';

    /**
     * Property listName.
     *
     * @var  string
     */
    protected $listName = 'Heros';

    /**
     * The default Repository.
     *
     * If set model name here, controller will get model object by this name.
     *
     * @var  HeroRepository
     */
    protected $repository = 'Hero';

    /**
     * A hook before main process executing.
     *
     * @return  void
     * @throws \ReflectionException
     */
    protected function prepareExecute()
    {
        parent::prepareExecute();
    }

    /**
     * A hook before save.
     *
     * @param DataInterface $data Data to save.
     *
     * @return void
     */
    protected function preSave(DataInterface $data)
    {
        parent::preSave($data);
    }

    /**
     * Check user has access to modify this resource or not.
     *
     * Throw exception with 4xx code or return false to block unauthorised access.
     *
     * @param   array|DataInterface $data
     *
     * @return  boolean
     *
     * @throws \RuntimeException
     * @throws \Windwalker\Core\Security\Exception\UnauthorizedException (401 / 403)
     */
    public function checkAccess($data)
    {
        return parent::checkAccess($data);
    }

    /**
     * A hook after save.
     *
     * @param DataInterface $data Data saved.
     *
     * @return  void
     */
    protected function postSave(DataInterface $data)
    {
        parent::postSave($data);
    }

    /**
     * A hook after main process executing.
     *
     * @param mixed $result The result content to return, can be any value or boolean.
     *
     * @return  mixed
     */
    protected function postExecute($result = null)
    {
        return parent::postExecute($result);
    }
}
