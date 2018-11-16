<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace -- Ignore seeder file

use Windwalker\Core\Seeder\AbstractSeeder;

/**
 * The MainSeeder class.
 *
 * @since  1.0
 */
class MainSeeder extends AbstractSeeder
{
    /**
     * doExecute
     *
     * @return  void
     * @throws ReflectionException
     */
    public function doExecute()
    {
        $this->execute(ArmorSeeder::class);

        // @muse-placeholder  seeder-execute  Do not remove this.
    }

    /**
     * doClear
     *
     * @return  void
     * @throws ReflectionException
     */
    public function doClear()
    {
        $this->clear(ArmorSeeder::class);

        // @muse-placeholder  seeder-clear  Do not remove this.
    }
}
