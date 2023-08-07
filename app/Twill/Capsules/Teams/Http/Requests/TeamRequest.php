<?php

namespace App\Twill\Capsules\Teams\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;

class TeamRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'linkedin' => 'nullable|url',
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'linkedin' => 'nullable|url',
        ];
    }
}
