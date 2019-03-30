<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Invitee;

class InviteeRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias;

    public function __construct(Invitee $model)
    {
        $this->model = $model;
    }
}
