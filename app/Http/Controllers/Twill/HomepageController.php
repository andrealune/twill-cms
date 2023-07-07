<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Files;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class HomepageController extends BaseModuleController
{
    protected $moduleName = 'homepages';
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

//        $form->add(
//            Input::make()->name('description')->label('Description')->translatable()
//        );

        $form->addFieldset(
            Fieldset::make()->title('Hero')->id('hero')->fields([
                Files::make()
                    ->name('hero_video_bg')
                    ->itemLabel('file')
                    ->label(twillTrans('Background video'))
                    ->max(1),
                Input::make()->name('hero_title')->label(twillTrans('Title'))->translatable(),
                Input::make()->name('hero_text')->label(twillTrans('Text'))->translatable()
            ])
        );

        $form->addFieldset(
            Fieldset::make()->title('Introduction')->id('intro')->fields([
                Medias::make()
                    ->name('intro_medias')
                    ->label(twillTrans('Add image'))
                    ->max(3),
                Input::make()->name('intro_text')->label(twillTrans('Text'))->translatable(),
                Input::make()->name('intro_cta')->label(twillTrans('CTA'))->translatable(),
                Input::make()->name('intro_link')->label(twillTrans('Link'))->translatable()
            ])
        );

        $form->addFieldset(
            Fieldset::make()->title('Slider')->id('slider')->fields([
                Medias::make()
                    ->name('slider_medias')
                    ->label(twillTrans('Add image'))
                    ->max(5)
            ])
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
