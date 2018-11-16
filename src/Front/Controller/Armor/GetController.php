<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Armor;

use Front\Repository\ArmorRepository;
use Front\View\Armor\ArmorHtmlView;
use Phoenix\Controller\Display\ItemDisplayController;
use Windwalker\Core\Repository\Repository;
use Windwalker\Core\View\AbstractView;

/**
 * The GetController class.
 *
 * @since  1.0
 */
class GetController extends ItemDisplayController
{
    /**
     * The default Repository.
     *
     * If set model name here, controller will get model object by this name.
     *
     * @var  ArmorRepository
     */
    protected $repository = 'Armor';

    /**
     * Main View.
     *
     * If set view name here, controller will get model object by this name.
     *
     * @var  ArmorHtmlView
     */
    protected $view = 'Armor';

    /**
     * A hook before main process executing.
     *
     * @return  void
     * @throws \Exception
     */
    protected function prepareExecute()
    {
        parent::prepareExecute();
    }

    /**
     * Prepare view and default repository.
     *
     * You can configure default model state here, or add more sub models to view.
     * Remember to call parent to make sure default model already set in view.
     *
     * @param AbstractView $view       The view to render page.
     * @param Repository   $repository The default repository.
     *
     * @return  void
     * @throws \ReflectionException
     */
    protected function prepareViewRepository(AbstractView $view, Repository $repository)
    {
        /**
         * @var $view       ArmorHtmlView
         * @var $repository ArmorRepository
         */
        parent::prepareViewRepository($view, $repository);

        // Configure view and repository here...
    }

    /**
     * Check user has access to view this page.
     *
     * Throw exception with 4xx code to block unauthorised access.
     *
     * @return  bool Return FALSE if use has no access to view page.
     *
     * @throws \RuntimeException
     * @throws \Windwalker\Router\Exception\RouteNotFoundException (404)
     * @throws \Windwalker\Core\Security\Exception\UnauthorizedException (401 / 403)
     */
    public function authorise()
    {
        return parent::authorise();
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
