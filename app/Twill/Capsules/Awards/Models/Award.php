<?php

namespace App\Twill\Capsules\Awards\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Award extends Model
{
    use HasTranslation, HasMedias, HasFiles;

    protected $fillable = [
        'published',
        'year',
        'company',
        'title',
        'description',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
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
