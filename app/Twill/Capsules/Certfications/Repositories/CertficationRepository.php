<?php

namespace App\Twill\Capsules\Certfications\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Certfications\Models\Certfication;

class CertficationRepository extends ModuleRepository
{
    use HandleFiles;
    protected $relatedBrowsers = ['category'];

    public function __construct(Certfication $model)
    {
        $this->model = $model;
    }
}
