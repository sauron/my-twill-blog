<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class InviteeController extends ModuleController
{
    protected $moduleName = 'invitees';
    protected $titleColumnKey = 'name';
    protected $translateTitle  = false;

    protected $defaultOrders = ['name' => 'asc'];

}
