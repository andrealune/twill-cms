<?php

namespace App\Twill\Capsules\Pages\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'type' => 'required|unique:pages,type',
        ];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
