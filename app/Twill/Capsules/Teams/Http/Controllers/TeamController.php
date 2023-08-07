<?php

namespace App\Twill\Capsules\Teams\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Twill\Capsules\Offices\Models\Office;

class TeamController extends BaseModuleController
{
    protected $moduleName = 'teams';

    protected $titleFormKey = 'name';

    protected $titleColumnKey = 'name';

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
            Input::make()->name('name')->label('Name')->required()
        );
        $form->add(
            Input::make()->name('role')->label('Role')->translatable()->required()
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
                ->name('photo')
                ->label(twillTrans('Photo'))
                ->required()
                ->max(1)
        );

        $form->add(
            Browser::make()
                ->label(twillTrans('Office'))
                ->modules(['office' => Office::class])
                ->name('office')
                ->browserNote('')
                ->max(1)
        );

        $form->add(
            Input::make()->name('role')->label('Role')->required()->translatable()
        );
        $form->add(
            Input::make()->name('linkedin')->label('LindkedIn')->type('url')
        );
        $form->add(
            Wysiwyg::make()->name('bio')->label('Bio')->translatable()
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
            Text::make()->field('role')->title('Role')
        );

        return $table;
    }


}
