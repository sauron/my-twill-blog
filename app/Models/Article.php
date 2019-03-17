<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Article extends Model 
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
    ];


    public $translatedAttributes = [
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'hero_image' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ]
            ]
        ]
    ];
}
