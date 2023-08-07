<?php

namespace App\Twill\Capsules\Projects\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Twill\Capsules\ProjectCategories\Models\ProjectCategory;

class ProjectController extends BaseModuleController
{
    protected $moduleName = 'projects';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Browser::make()
                ->label(twillTrans('Category'))
                ->modules(['category' => ProjectCategory::class])
                ->name('category')
                ->browserNote('')
                ->required()
                ->max(1)
        );

        $form->add(
            Medias::make()
                ->name('cover')
                ->label(twillTrans('Cover image'))
                ->required()
                ->max(1)
        );

        $form->add(
            Input::make()->name('abstract')->label('Abstract')->translatable()->required()
        );

        $form->add(
            Input::make()->name('description')->label('Description')->translatable()->required()
        );

        $form->add(
            Input::make()->name('client')->label('Client')->translatable()->required()
        );

        $form->add(
            Input::make()->name('location')->label('Location')->translatable()->required()
        );

        $form->add(
            Input::make()->name('year')->label('Year')->translatable()->required()
        );

        $form->add(
            BlockEditor::make()
        );

        $form->addFieldset(
            Fieldset::make()->title('SEO')->id('seo')->fields([
                Input::make()->name('seo_title')->label(twillTrans('Title SEO'))->translatable(),
                Input::make()->name('seo_description')->label(twillTrans('Description SEO'))->translatable(),
                Medias::make()
                    ->name('seo_image')
                    ->label(twillTrans('Image SEO'))
                    ->max(1)
            ])
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
