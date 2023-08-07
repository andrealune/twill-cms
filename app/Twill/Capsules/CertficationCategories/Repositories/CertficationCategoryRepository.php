<?php

namespace App\Twill\Capsules\CertficationCategories\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\CertficationCategories\Models\CertficationCategory;

class CertficationCategoryRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(CertficationCategory $model)
    {
        $this->model = $model;
    }
}
