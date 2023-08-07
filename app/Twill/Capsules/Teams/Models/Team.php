<?php

namespace App\Twill\Capsules\Teams\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;

class Team extends Model
{
    use HasTranslation, HasMedias, HasFiles, HasRelated;

    protected $fillable = [
        'published',
        'name',
        'role',
        'linkdin',
        'bio',
    ];

    public $translatedAttributes = [
        'role',
        'bio',
        'active',
    ];

    public $mediasParams = [
        'photo' => [
            'desktop' => [
                [
                    'name' => 'default',
                    'ratio' => 2 / 3,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

}
