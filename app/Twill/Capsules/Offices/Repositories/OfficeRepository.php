<?php

namespace App\Twill\Capsules\Offices\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Offices\Models\Office;

class OfficeRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Office $model)
    {
        $this->model = $model;
    }
}
