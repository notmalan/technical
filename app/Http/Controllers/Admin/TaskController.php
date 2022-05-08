<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TaskController extends BaseModuleController
{
    protected $moduleName = 'tasks';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
