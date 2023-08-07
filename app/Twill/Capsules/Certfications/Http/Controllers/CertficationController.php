<?php

namespace App\Twill\Capsules\Certfications\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Files;
use A17\Twill\Services\Listings\Columns\Browser as BrowserColumn;
use A17\Twill\Services\Listings\Columns\Image;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\DatePicker;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Twill\Capsules\CertficationCategories\Models\CertficationCategory;

class CertficationController extends BaseModuleController
{
    protected $moduleName = 'certfications';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
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
                ->modules(['category' => CertficationCategory::class])
                ->name('category')
                ->browserNote('')
                ->required()
                ->max(1)
        );

        $form->add(
            Files::make()
                ->name('document')
                ->itemLabel('file')
                ->label(twillTrans('Document'))
                ->max(1)
        );

        $form->add(
            DatePicker::make()->name('date')->label('Date')->required()->withoutTime()
        );

        $form->add(
            Input::make()->name('description')->label('Description')
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
            Text::make()->field('title')->title('Title')->linkToEdit()
        );
//        $columns->add(
//            BrowserColumn::make()->field('title')->browser('category')->title('Category')
//        );
        return $columns;
    }

}
