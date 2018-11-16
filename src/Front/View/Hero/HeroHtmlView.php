<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\View\Hero;

use Phoenix\View\ItemView;
use Windwalker\Core\Asset\Asset;

/**
 * The HeroHtmlView class.
 *
 * @since  1.0
 */
class HeroHtmlView extends ItemView
{
    /**
     * Property name.
     *
     * @var  string
     */
    protected $name = 'Hero';

    /**
     * prepareData
     *
     * @param \Windwalker\Data\Data $data
     *
     * @return  void
     */
    protected function prepareData($data)
    {
        parent::prepareData($data);

        $this->prepareScripts();
        $this->prepareMetadata();
    }

    /**
     * prepareDocument
     *
     * @return  void
     */
    protected function prepareScripts()
    {
//        Asset::addJS('js/hero.min.js');
    }

    /**
     * prepareMetadata
     *
     * @return  void
     */
    protected function prepareMetadata()
    {
        $this->setTitle();
    }
}
