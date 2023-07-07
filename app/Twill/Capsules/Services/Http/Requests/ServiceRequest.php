<?php

namespace App\Twill\Capsules\Services\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class ServiceRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
