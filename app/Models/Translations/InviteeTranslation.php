<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;

class InviteeTranslation extends Model
{
    protected $fillable = [
        'title',
        'bio',
        'active',
        'locale',
    ];
}
