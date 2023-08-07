<?php

namespace App\Twill\Capsules\Teams\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Teams\Models\Team;

class TeamRepository extends ModuleRepository
{
    use HandleTranslations, HandleMedias, HandleFiles;

    protected $relatedBrowsers = ['office'];

    public function __construct(Team $model)
    {
        $this->model = $model;
    }
}
