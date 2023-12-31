<?php

namespace App\Twill\Capsules\Projects\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Builder;

class Project extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description'
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'abstract',
        'client',
        'location',
        'year',
        'seo_title',
        'seo_description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'desktop' => [
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
        'seo_image' => [
            'desktop' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ]
        ]
    ];

    /*
     * Scope a query to only include published news.
     */
    public function scopePublished($query): Builder
    {
        $query->where("published", true);
        if($this->publish_start_date)
            $query->whereDate("publish_start_date", '<=', now());
        if($this->publish_end_date)
            $query->whereDate("publish_end_date", '>=', now());

        return $query;
    }
}
