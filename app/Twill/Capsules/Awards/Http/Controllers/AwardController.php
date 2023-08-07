<?php

namespace App\Twill\Capsules\Awards\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Listings\Columns\Image;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class AwardController extends BaseModuleController
{
    protected $moduleName = 'awards';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getCreateForm(): Form
    {
        $form = Form::make();

        $form->add(
            Input::make()->name('company')->label('Company')->required()
        );
        $form->add(
            Input::make()->name('title')->label('Title')->translatable()->required()
        );
        $form->add(
            Input::make()->name('year')->label('Year')->required()->type('number')
        );
        return $form;
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Medias::make()
                ->name('cover')
                ->label(twillTrans('Cover image'))
                ->required()
                ->max(1)
        );

        $form->add(
            Input::make()->name('company')->label('Company')->required()
        );
        $form->add(
            Input::make()->name('year')->label('Year')->required()->type('number')
        );
        $form->add(
            Input::make()->name('description')->label('Description')->translatable()
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function getIndexTableColumns(): TableColumns
    {
        $columns = new TableColumns();

        $columns->add(
            Image::make()->field('cover')->title('')
        );
        $columns->add(
            Text::make()->field('company')->title('Company')->linkToEdit()
        );
        $columns->add(
            Text::make()->field('title')->title('Title')
        );
        $columns->add(
            Text::make()->field('year')->title('Year')
        );

        return $columns;
    }
}
