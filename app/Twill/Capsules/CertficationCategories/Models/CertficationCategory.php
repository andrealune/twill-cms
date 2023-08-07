<?php

namespace App\Twill\Capsules\CertficationCategories\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class CertficationCategory extends Model 
{
    use HasTranslation;

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
    
}
