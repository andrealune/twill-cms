<?php

namespace App\Twill\Capsules\NewsCategories\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\NewsCategories\Models\NewsCategory;

class NewsCategoryRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs;

    public function __construct(NewsCategory $model)
    {
        $this->model = $model;
    }
}
