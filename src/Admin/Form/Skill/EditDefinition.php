<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Form\Skill;

use Admin\Field\Skill\SkillListField;
use Admin\Field\Skill\SkillModalField;
use Phoenix\Form\Filter\UtcFilter;
use Phoenix\Form\PhoenixFieldTrait;
use Windwalker\Core\Form\AbstractFieldDefinition;
use Windwalker\Form\Filter\MaxLengthFilter;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule;

/**
 * The SkillEditDefinition class.
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
                ->label(__('admin.skill.field.title'))
                ->addFilter('trim')
                ->maxlength(255)
                ->required(true);

            // Alias
            $this->text('alias')
                ->label(__('admin.skill.field.alias'))
                ->description(__('admin.skill.field.alias.desc'))
                ->maxlength(255);

            // Image
            $this->text('image')
                ->label(__('admin.skill.field.image'))
                ->maxlength(255);

            // URL
            $this->text('url')
                ->label(__('admin.skill.field.url'))
                ->maxlength(255)
                ->addValidator(Rule\UrlValidator::class)
                ->attr('data-validate', 'url');

            // Example: Skill List
            // TODO: Please remove this field in production
            $this->add('skill_list', SkillListField::class)
                ->label('List Example')
                ->option('- Select Skill Example -', '')
                ->addClass('has-select2');

            // Example: Skill Modal
            // TODO: Please remove this field in production
            $this->add('skill_modal', SkillModalField::class)
                ->label('Modal Example')
                ->set('placeholder', 'Select Skill Example');
        });

        // Text Fieldset
        $this->fieldset('text', function (Form $form) {
            // Introtext
            $this->textarea('introtext')
                ->label(__('admin.skill.field.introtext'))
                ->maxlength(static::TEXT_MAX_UTF8)
                ->rows(10);

            // Fulltext
            $this->textarea('fulltext')
                ->label(__('admin.skill.field.fulltext'))
                ->maxlength(static::TEXT_MAX_UTF8)
                ->rows(10);
        });

        // Created fieldset
        $this->fieldset('created', function (Form $form) {
            // State
            $this->switch('state')
                ->label(__('admin.skill.field.published'))
                ->class('')
                ->color('success')
                ->circle(true)
                ->defaultValue(1);

            // Created
            $this->calendar('created')
                ->label(__('admin.skill.field.created'))
                ->addFilter(UtcFilter::class);

            // Modified
            $this->calendar('modified')
                ->label(__('admin.skill.field.modified'))
                ->addFilter(UtcFilter::class)
                ->disabled();

            // Author
            $this->text('created_by')
                ->label(__('admin.skill.field.author'));

            // Modified User
            $this->text('modified_by')
                ->label(__('admin.skill.field.modifiedby'))
                ->disabled();
        });
    }
}
