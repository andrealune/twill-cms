<?php

namespace App\Twill\Capsules\Awards\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class AwardRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'company' => 'required',
            'year' => 'required|numeric',
        ];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
