<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Homepage extends Model
{
    use HasTranslation, HasMedias, HasFiles;

    protected $fillable = [
        'published',
        'title',
        'description',
        'hero_title',
        'hero_text',
        'intro_text',
        'intro_cta',
        'intro_link'
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'hero_title',
        'hero_text',
        'intro_text',
        'intro_cta',
        'intro_link'
    ];

    public $filesParams = ['hero_video_bg']; // a list of file

    public $mediasParams = [
        'intro_medias' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'slider_medias' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
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
