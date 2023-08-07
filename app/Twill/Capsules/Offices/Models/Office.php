<?php

namespace App\Twill\Capsules\Offices\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Office extends Model
{
    use HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'description',
        'country',
        'city',
        'address',
        'phone',
        'email',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

}
