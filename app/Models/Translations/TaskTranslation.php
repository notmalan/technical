<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Task;

class TaskTranslation extends Model
{
    protected $baseModuleModel = Task::class;
}
