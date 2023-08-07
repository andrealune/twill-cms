<?php

namespace App\Twill\Capsules\Awards\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Awards\Models\Award;

class AwardRepository extends ModuleRepository
{
    use HandleTranslations, HandleMedias, HandleFiles;

    public function __construct(Award $model)
    {
        $this->model = $model;
    }
}
