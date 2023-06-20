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

class News extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions, HasRelated, HasChildBlocks, HasFileables, HasMediables;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

}
