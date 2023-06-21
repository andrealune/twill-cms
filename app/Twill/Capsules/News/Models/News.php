<?php

namespace App\Twill\Capsules\News\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;


use A17\Twill\API\Models\Traits\HasChildBlocks;
use A17\Twill\API\Models\Traits\HasFileables;
use A17\Twill\API\Models\Traits\HasMediables;
use Illuminate\Database\Eloquent\Builder;

class News extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions, HasRelated, HasChildBlocks, HasFileables, HasMediables;

    protected $fillable = [
        'published',
        'title',
        'description',
        'publish_start_date',
        'publish_end_date'
    ];

    protected $casts = [
        'publish_start_date' => 'datetime',
        'publish_end_date' => 'datetime',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
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
