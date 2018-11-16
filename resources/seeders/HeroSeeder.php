<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

use Admin\DataMapper\HeroMapper;
use Admin\DataMapper\SkillMapper;
use Admin\Table\Table;
use Faker\Factory;
use Lyrasoft\Luna\Admin\DataMapper\CategoryMapper;
use Lyrasoft\Warder\Admin\DataMapper\UserMapper;
use Windwalker\Core\Seeder\AbstractSeeder;
use Windwalker\Data\Data;
use Windwalker\Filter\OutputFilter;

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace -- Ignore seeder file

/**
 * The HeroSeeder class.
 *
 * @since  1.0
 */
class HeroSeeder extends AbstractSeeder
{
    /**
     * doExecute
     *
     * @return  void
     * @throws Exception
     */
    public function doExecute()
    {
        $faker = Factory::create('en_GB');
        $userIds = UserMapper::findColumn('id');
        $skillIds = SkillMapper::findColumn('id');
        $categoriesIds = CategoryMapper::findColumn('id', ['type' => 'hero']);

        foreach (range(1, 150) as $i) {
            $created = $faker->dateTimeThisYear;
            $data    = new Data();

            $data['category_id'] = $faker->randomElement($categoriesIds);
            $data['title']       = $faker->name;
            $data['alias']       = OutputFilter::stringURLUnicodeSlug($data['title']);
            $data['url']         = $faker->url;
            $data['introtext']   = $faker->paragraph(5);
            $data['fulltext']    = $faker->paragraph(5);
            $data['image']       = $faker->imageUrl();
            $data['state']       = $faker->randomElement([1, 1, 0]);
            $data['ordering']    = $i;
            $data['created']     = $created->format($this->getDateFormat());
            $data['created_by']  = $faker->randomElement($userIds);
            $data['modified']    = $created->modify('+5 days')->format($this->getDateFormat());
            $data['modified_by'] = $faker->randomElement($userIds);
            $data['language']    = 'en-GB';
            $data['params']      = '';

            $hero = HeroMapper::createOne($data);

            foreach ($faker->randomElements($skillIds, random_int(3, 5)) as $k => $skillId) {
                \Admin\DataMapper\HeroSkillMapMapper::createOne([
                    'skill_id' => $skillId,
                    'hero_id' => $hero->id,
                    'ordering' => $k + 1
                ]);
            }

            $this->outCounting();
        }
    }

    /**
     * doClear
     *
     * @return  void
     */
    public function doClear()
    {
        $this->truncate(Table::HEROS);
    }
}
