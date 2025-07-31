<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model
{
    protected $table = 'table_project_list';
    protected $fillable = [
        'client_name',
        'project_email',
        'start_date',
        'end_date',
        'location',
        'budget',
        'min_labour',
        'max_labour',
        'variant_extra_ot',
        'team_ot_limit',
    ];
}
