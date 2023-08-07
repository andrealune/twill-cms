<?php

namespace App\Twill\Capsules\Certfications\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;

class Certfication extends Model
{
    use HasFiles, HasRelated;

    protected $fillable = [
        'published',
        'date',
        'title',
        'description',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public $filesParams = ['document'];

}
