<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Invitee extends Model 
{
    use HasTranslation, HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'name',
    ];

    public $translatedAttributes = [
        'bio',
    ];

    public $slugAttributes = [
        'name',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'profile' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 1 / 1,
                ],
            ],
        ],
    ];
}
