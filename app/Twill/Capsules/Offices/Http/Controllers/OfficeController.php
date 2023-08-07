<?php

namespace App\Twill\Capsules\Offices\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OfficeController extends BaseModuleController
{
    protected $moduleName = 'offices';

    protected $titleFormKey = 'city';

    protected $titleColumnKey = 'city';

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
            Select::make()->name('country')->label('Country')->options([
                'italy' => 'Italy',
                'americas' => 'Americas',
                'germany' => 'Germany',
                'china' => 'China',
            ])->required()->default('italy')
        );
        $form->add(
            Input::make()->name('city')->label('City')->required()
        );
        $form->add(
            Input::make()->name('title')->label('Title')->translatable()->required()
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
            Select::make()->name('country')->label('Country')->options([
                'Italy' => 'Italy',
                'Americas' => 'Americas',
                'Germany' => 'Germany',
                'China' => 'China',
            ])->required()->default('italy')
        );
        $form->add(
            Input::make()->name('title')->label('Title')->translatable()->required()
        );
        $form->add(
            Input::make()->name('address')->label('Address')
        );
        $form->add(
            Input::make()->name('phone')->label('Phone')
        );
        $form->add(
            Input::make()->name('email')->label('Email')->type('email')
        );

        $form->add(
            Input::make()->name('description')->label('Description')->translatable()
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
            Text::make()->field('country')->title('Country')
        );

        $table->add(
            Text::make()->field('title')->title('Title')
        );

        return $table;
    }
}
