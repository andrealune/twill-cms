<?php

namespace App\Twill\Capsules\Pages\Http\Controllers;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Twill\Capsules\Pages\Models\Page;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    public function getCreateForm(): Form
    {
        $form = Form::make();
        $form->add(
            Select::make()->name('type')->label('Type')->options([
                'homepage' => 'Homepage',
                'our_group' => 'Our Group',
                'heritage' => 'Heritage',
                'team' => 'Team',
                'awards' => 'Awards',
                'partners' => 'Partners',
                'certifications' => 'Certifications'
            ])->required()->default('homepage')
        );
        $form->add(
            Input::make()->name('title')->label('Title')->translatable()->required()
        );
        $form->add(
            Input::make()->name('description')->label('Description')->translatable()->required()
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

        if($this->request->route() && isset($this->request->route()->parameters()['page'])) {
            $id = $this->request->route()->parameters()['page'];
            $page = Page::find($id);

            $blocks = [
                'homepage' => ['hero-home', 'intro-home', 'gallery'],
                'our_group' => ['text','title-text-cta-number'],
                'heritage' => ['gallery-multiple-description','accordion'],
                'team' => ['team'],
                'awards' => ['awards'],
                'partners' => ['projects','sectors','partners'],
                'certifications' => ['certifications'],
            ];

            $form->add(
                Input::make()->name('description')->label('Description')->translatable()->required()
            );

            $form->add(
                BlockEditor::make()->blocks($blocks[$page->type])
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
        }

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
