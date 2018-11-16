<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Form\Hero;

use Admin\Field\Hero\HeroListField;
use Admin\Field\Hero\HeroModalField;
use Phoenix\Form\Filter\UtcFilter;
use Phoenix\Form\PhoenixFieldTrait;
use Windwalker\Core\Form\AbstractFieldDefinition;
use Windwalker\Form\Filter\MaxLengthFilter;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule;

/**
 * The HeroEditDefinition class.
 *
 * @since  1.0
 */
class EditDefinition extends AbstractFieldDefinition
{
    use PhoenixFieldTrait;

    /**
     * Define the form fields.
     *
     * @param Form $form The Windwalker form object.
     *
     * @return  void
     *
     * @throws \InvalidArgumentException
     */
    public function doDefine(Form $form)
    {
        // Basic fieldset
        $this->fieldset('basic', function (Form $form) {
            // ID
            $this->hidden('id');

            // Title
            $this->text('title')
                ->label(__('admin.hero.field.title'))
                ->addFilter('trim')
                ->maxlength(255)
                ->required(true);

            // Alias
            $this->text('alias')
                ->label(__('admin.hero.field.alias'))
                ->description(__('admin.hero.field.alias.desc'))
                ->maxlength(255);

            // Image
            $this->text('image')
                ->label(__('admin.hero.field.image'))
                ->maxlength(255);

            // URL
            $this->text('url')
                ->label(__('admin.hero.field.url'))
                ->maxlength(255)
                ->addValidator(Rule\UrlValidator::class)
                ->attr('data-validate', 'url');

            // Example: Hero List
            // TODO: Please remove this field in production
            $this->add('hero_list', HeroListField::class)
                ->label('List Example')
                ->option('- Select Hero Example -', '')
                ->addClass('has-select2');

            // Example: Hero Modal
            // TODO: Please remove this field in production
            $this->add('hero_modal', HeroModalField::class)
                ->label('Modal Example')
                ->set('placeholder', 'Select Hero Example');
        });

        // Text Fieldset
        $this->fieldset('text', function (Form $form) {
            // Introtext
            $this->textarea('introtext')
                ->label(__('admin.hero.field.introtext'))
                ->maxlength(static::TEXT_MAX_UTF8)
                ->rows(10);

            // Fulltext
            $this->textarea('fulltext')
                ->label(__('admin.hero.field.fulltext'))
                ->maxlength(static::TEXT_MAX_UTF8)
                ->rows(10);
        });

        // Created fieldset
        $this->fieldset('created', function (Form $form) {
            // State
            $this->switch('state')
                ->label(__('admin.hero.field.published'))
                ->class('')
                ->color('success')
                ->circle(true)
                ->defaultValue(1);

            // Created
            $this->calendar('created')
                ->label(__('admin.hero.field.created'))
                ->addFilter(UtcFilter::class);

            // Modified
            $this->calendar('modified')
                ->label(__('admin.hero.field.modified'))
                ->addFilter(UtcFilter::class)
                ->disabled();

            // Author
            $this->text('created_by')
                ->label(__('admin.hero.field.author'));

            // Modified User
            $this->text('modified_by')
                ->label(__('admin.hero.field.modifiedby'))
                ->disabled();
        });
    }
}
