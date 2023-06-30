<?php

namespace App\Twill\Capsules\ProjectCategories\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\ProjectCategories\Models\ProjectCategory;

class ProjectCategoryRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias;

    public function __construct(ProjectCategory $model)
    {
        $this->model = $model;
    }
}
